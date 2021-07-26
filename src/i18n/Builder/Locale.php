<?php

declare(strict_types=1);

/**
 * Generación de la información de los locales usando los datos del proyecto CLDR y archivos de definición LDML
 *
 * Basado en el código de CldrCommand de yiiframework
 * Copyright &copy; 2008-2011 Yii Software LLC
 * http://www.yiiframework.com/license/
 */
class i18n_Builder_Locale
{

    private $_dataPath;
    private $_data = [];
    private $_dateDonverter;

    public $cldrVersion;

    public const DB_URL = 'http://www.unicode.org/Public/cldr/latest/core.zip';

    public function build(string $outputPath, ?string $sourcePath = '')
    {
        set_time_limit(7200);

        // Preparar fuentes
        if (empty($sourcePath)) {
            [$tempPath, $sourcePath] = $this->_downloadCLDR($outputPath);
        }

        /*
          if (!is_file($pluralFile = $basePath . DIRECTORY_SEPARATOR . 'supplemental' . DIRECTORY_SEPARATOR . 'plurals.xml'))
          $this->usageError("File '$pluralFile' does not exist.");

          // parse plural.xml before locale files
          $pluralXml = simplexml_load_file($pluralFile);
          $this->parsePluralRules($pluralXml);
         */

        $this->_dateDonverter = new i18n_Builder_DateConverter();

        // Buscar archivos origen (.xml)
        $this->_dataPath = $sourcePath . '/common/main';
        if (!is_dir($this->_dataPath)) {
            throw new Exception("The locale folder '{$this->_dataPath}' cannot be found.");
        }

        $files = array_merge(IO::get($this->_dataPath, -1, '*.xml'), IO::get($this->_dataPath, -1, '*.ldml'));

        $sourceFiles = [];
        foreach ($files as $file) {
            $sourceFiles[basename($file)] = $file;
        }

        ksort($sourceFiles); // ordenar por nombre para procesar correctamente las herencias

        // Analizar archivos
        echo '<h2>Process</h2>';
        foreach ($sourceFiles as $file => $path) {
            if (IO::getFilenameWithoutExtension($path) != 'root') {
                echo "Processing {$file}...";
                $data = $this->_extractLocaleData($path);
                $this->_writeLocale($data, $outputPath);
                echo ' done<br/>';
            }
        }


        // Eliminar temporales
        if (isset($tempPath)) {
            unlink($tempPath);
        }

        echo '<h2>Finish</h2>';
    }

    private function _downloadCLDR($outputPath): array
    {
        // Si no se indica la carpeta con el código fuente, crearla dentro de la carpeta destino temporalmente y descargar la última versión
        $tempPath = $outputPath . '/locale_builder_data';
        if (!is_dir($tempPath)) {
            if (!mkdir($tempPath)) {
                throw new Exception("Directory '{$tempPath}' can not be created.");
            }
        }

        // Descargar última versión
        $zipPath = $tempPath . '/core.zip';
        if (!file_exists($zipPath)) {
            $latestUrl = self::DB_URL;
            echo "<p>Downloading $latestUrl</p>";
            $ch = curl_init($latestUrl);
            $fp = fopen($zipPath, "w");
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            if (curl_exec($ch) === false) {
                throw new Exception("Failed to download from '$latestUrl'.");
            }
            curl_close($ch);
            fclose($fp);
        }

        // Descomprimir
        $zip = new ZipArchive;
        if ($zip->open($zipPath) === true) {
            $zip->extractTo($tempPath);
            $zip->close();
        } else {
            throw new Exception("Failed to unzip '{$zipPath}'.");
        }

        $sourcePath = $tempPath;
        return [$tempPath, $sourcePath];
    }

    private function _extractLocaleData(string $path): array
    {
        $locale = IO::getFilenameWithoutExtension($path);

        // Generar lista de archivos a analizar
        $analice = ['root', 'en'];

        foreach (i18n_Locale::getFallback($locale) as $fallback) {
            $analice[] = $fallback;
        }

        $parts = explode('_', $locale);
        for ($i = 0; $i < count($parts); $i++) {
            $analice[] = implode('_', array_slice($parts, 0, $i + 1));
        }
        $analice = array_unique(Arr::trim($analice, true));

        // Analizar datos por orden
        $data = [ // Datos por defecto
                  'version'                => $this->cldrVersion,
                  'orientation'            => 'ltr',
                  'decimalSeparator'       => '.',
                  'groupSeparator'         => ',',
                  'currencyFormat'         => '¤%f',
                  'currencyNegativeFormat' => '(¤%f)'
        ];
        foreach ($analice as $locale) {
            $specificData = $this->_getLocaleData($locale);
            foreach ($specificData as $k => $value) {
                if (is_array($value) && isset($data[$k]) && is_array($data[$k])) {
                    $data[$k] = $value + $data[$k]; // Tienen mas relevancia los locales del final
                } else {
                    $data[$k] = $value;
                }
            }
            //  $data = Arr::merge($data, $this->_get_locale_data($locale));
        }
        echo ' (built from ' . implode(', ', $analice) . ')...';

        return $data;
    }

    private function _getLocaleData(string $locale)
    {
        if (!isset($this->_data[$locale])) {
            $path = $this->_dataPath . '/' . $locale . '.xml';
            if (!IO::exists($path)) {
                $path = $this->_dataPath . '/' . str_replace('-', '_', $locale) . '.xml';
                if (!IO::exists($path)) {
                    throw new Exception("Unable to find the required file '{$path}' under CLDR 'main' data directory.");
                }
            }

            // Leer desde el xml
            $data = [];

            $xml = simplexml_load_file($path);

            $this->parseVersion($xml, $data);

            $this->parseLocaleData($locale, $xml, $data);

            $this->parseOrientation($xml, $data);

            $this->parseNumberSymbols($xml, $data, $locale);
            $this->parseNumberFormats($xml, $data);
            $this->parseCurrencySymbols($xml, $data);
            $this->parseCurrencies($xml, $data);

            $this->parseMonthNames($xml, $data);
            $this->parseWeekDayNames($xml, $data, $locale);
            //    $this->parseEraNames($xml, $data);
            $this->parseIntervals($xml, $data);

            $this->parseDateFormats($xml, $data);
            $this->parseTimeFormats($xml, $data);
            $this->parseDateTimeFormat($xml, $data);
            $this->parsePeriodNames($xml, $data); //AM / PM


            $this->parseLanguages($xml, $data);
            // $this->parseScripts($xml, $data);
            $this->parseTerritories($xml, $data);

            $this->parseLocaleData(
                $locale,
                $xml,
                $data
            ); // Realizar otra vez para leer los nombres de los idiomas una vez cargados

            if ($locale == 'es') {
                $data['territories']['US'] = 'Estados Unidos';
            }

            $this->_data[$locale] = $data;
        }

        return $this->_data[$locale];
    }

    private function _writeLocale(array $data, string $outputDir)
    {
        // Crear directorio destino
        $dir = IO::combinePaths($outputDir, str_replace(['-', '_'], DIRECTORY_SEPARATOR, $data['locale']));
        if (!is_dir($dir)) {
            mkdir($dir);
        }


        // Crear código PHP
        $constructor = [];
        $methods = [];

        $created = date('r');

        foreach ($data as $name => $value) {
            if (is_object($value)) {
                $methods[] = $value->render();
            } else {
                if (is_array($value)) {
                    if (in_array($name, ['languages', 'territories', 'currencies'])) {
                        $fileName = Str::capitalizeFirst($name);
                        $array = var_export($value, true);
                        $php = "<?php
declare(strict_types=1);

/**
 * {$fileName} for '{$data['locale']}'.
 * Created: {$created}
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
 return {$array};";
                        IO::write(IO::combinePaths($dir, "{$fileName}.php"), $php);
                        $methods[] = "public function {$name}(): array{
                   return require __DIR__ . DIRECTORY_SEPARATOR . '{$fileName}.php';
                }";
                    } elseif ($name == 'currencySymbols') {
                        if ($data['locale'] != 'en') {
                            continue;
                        }
                        $array = var_export($value, true);
                        $php = "<?php
declare(strict_types=1);

/**
 * Currency symbols
 * Created: {$created}
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2020 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
 abstract class i18n_Locale_CurrencySymbols {
 public static function available() {
  return {$array};
 }
 }
";
                        IO::write(IO::combinePaths($outputDir, "CurrencySymbols.php"), $php);
                    } elseif ($name == 'weekDays' || $name == 'months') {
                        $cases = [];
                        foreach ($value as $key => $case) {
                            if ($key == i18n_Locale::TYPE_WIDE) {
                                $key = 'i18n_Locale::TYPE_WIDE';
                            } elseif ($key == i18n_Locale::TYPE_ABBREVIATED) {
                                $key = 'i18n_Locale::TYPE_ABBREVIATED';
                            } elseif ($key == i18n_Locale::TYPE_NARROW) {
                                $key = 'i18n_Locale::TYPE_NARROW';
                            } else {
                                $key = var_export($key, true);
                            }
                            $case = var_export($case, true);
                            $case = str_replace("\n", "\n                    ", $case);
                            $cases[] = "            case $key:
                return $case;";
                        }
                        $methods[] = "public function {$name}(\$type = i18n_Locale::TYPE_WIDE): array{
        switch(\$type) {
" . implode("\n", $cases) . "
        }
    }";
                    } else {
                        $methods[] = "public function {$name}(): array{
                    return " . str_replace("\n", "\n            ", var_export($value, true)) . ";
                }";
                    }
                } elseif ($name == 'version') {
                    $constructor[] = "// Version $value";
                } else {
                    $constructor[] = "\$this->{$name} = " . var_export($value, true) . ';';
                }
            }
        }

        $className = str_replace('-', '_', $data['locale']);
        $constructor = implode("\n        ", $constructor);
        $methods = implode("\n\n        ", $methods);

        $php = "<?php
declare(strict_types=1);

/**
 * Locale data for '{$data['locale']}'.
 * Created: {$created}
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_{$className}_Data extends i18n_Locale
{
    public function __construct() {
        {$constructor}
    }
        
    {$methods}
}
";

        return IO::write(IO::combinePaths($dir, "Data.php"), $php);
    }

    protected function parseVersion($xml, array &$data)
    {
        if (preg_match('/[\d\.]+/', (string)$xml->identity->version['number'], $matches)) {
            $data['version'] = $matches[0];
        }
    }

    protected function parseLocaleData($locale, $xml, array &$data)
    {
        // Codigos de idioma y cultura
        if (($pos = strpos($locale, '_')) !== false) {
            $data['language'] = $language = substr($locale, 0, $pos);
            $territory = substr($locale, $pos + 1);
        } else {
            $data['language'] = $locale;
        }
        $data['locale'] = str_replace('_', '-', $locale);

        //Nombre en inglés y nativo del locale
        if ($locale != 'root') {
            //Ingles
            $enData = $locale == 'en' ? $data : $this->_getLocaleData('en');

            if (isset($enData['languages'][$locale])) {
                $data['nameEnglish'] = $enData['languages'][$locale];
            } elseif (isset($language, $territory) && isset($enData['languages'][$language], $enData['territories'][$territory])) {
                $en_lang = $enData['languages'][$language];
                $en_region = $enData['territories'][$territory];
                $data['nameEnglish'] = "{$en_lang} ({$en_region})";
            }

            //Nativo
            $sources = [$data];
            if (!empty($language)) {
                $sources[] = $this->_getLocaleData($language);
            }

            foreach ($sources as $source) {
                if (!isset($source['languages'])) {
                    continue;
                }

                if (isset($source['languages'][$locale])) {
                    $data['nameNative'] = $source['languages'][$locale];
                    break;
                } else {
                    if (isset($language, $territory) && isset($source['languages'][$language], $source['territories'][$territory])) {
                        $data['nameNative'] = "{$source['languages'][$language]} ({$source['territories'][$territory]})";
                        break;
                    }
                }
            }

            if (empty($data['nameNative']) && !empty($data['nameEnglish'])) {
                $data['nameNative'] = $data['nameEnglish'];
            }

            // Primera letra en maýuscula
            if (!empty($data['nameNative'])) {
                $data['nameNative'] = mb_substr(mb_strtoupper($data['nameNative']), 0, 1) . mb_substr($data['nameNative'], 1);
            }
        }
    }

    protected function parseNumberSymbols($xml, array &$data, $locale)
    {
        foreach ($xml->xpath('/ldml/numbers/symbols/*') as $symbol) {
            $name = $symbol->getName();

            switch ($name) {
                case 'decimal':
                    $data['decimalSeparator'] = (string)$symbol;
                    break;

                case 'group':
                    $data['groupSeparator'] = (string)$symbol;
                    break;
            }
        }
    }

    protected function parseNumberFormats($xml, array &$data)
    {
        //   $pattern = $xml->xpath('/ldml/numbers/currencyFormats/currencyFormatLength/currencyFormat/pattern');
        $pattern = $xml->xpath("//currencyFormat[@type='accounting']/pattern");
        if (isset($pattern[0])) {
            $format = (string)$pattern[0];
            $format = preg_replace('/[#]+,[#]+[\d\.]+/', '%f', $format);
            $parts = explode(';', $format);
            $data['currencyFormat'] = $parts[0];
            $data['currencyNegativeFormat'] = count($parts) > 1 ? $parts[1] : $parts[0];
        }
    }

    protected function parseCurrencySymbols($xml, array &$data)
    {
        $currencies = $xml->xpath('//numbers/currencies/currency');
        foreach ($currencies as $currency) {
            if ((string)$currency->symbol != '') {
                $data['currencySymbols'][(string)$currency['type']] = (string)$currency->symbol;
            }
        }
    }

    protected function parseCurrencies($xml, array &$data)
    {
        $currencies = $xml->xpath('//numbers/currencies/currency');
        foreach ($currencies as $currency) {
            if ((string)$currency->displayName != '') {
                $data['currencies'][(string)$currency['type']] = (string)$currency->displayName;
            }
        }
    }

    protected function parseLanguages($xml, array &$data)
    {
        $languages = $xml->xpath('/ldml/localeDisplayNames/languages/language');
        foreach ($languages as $language) {
            $code = str_replace('-', '_', (string)$language['type']);
            if ((string)$language != '') {
                if (strlen($code) == 2 || strpos($code, '_') !== false) { //Solo idiomas comunes
                    $data['languages'][$code] = (string)$language;
                }
            }
        }

        if (!empty($data['languages'])) {
            asort($data['languages']);
        }
    }

    protected function parseScripts($xml, array &$data)
    {
        $scripts = $xml->xpath('/ldml/localeDisplayNames/scripts/script');
        foreach ($scripts as $script) {
            if ((string)$script != '') {
                $data['scripts'][strtolower(str_replace('-', '_', (string)$script['type']))] = (string)$script;
            }
        }
    }

    protected function parseTerritories($xml, array &$data)
    {
        $territories = $xml->xpath('/ldml/localeDisplayNames/territories/territory');
        foreach ($territories as $territory) {
            $code = str_replace('-', '_', (string)$territory['type']);
            if ((string)$territory != '' && $code != 'ZZ' && !is_numeric($code)) {
                $data['territories'][$code] = (string)$territory;
            }
        }

        if (!empty($data['territories'])) {
            asort($data['territories']);
        }
    }

    protected function parseMonthNames($xml, array &$data)
    {
        $xpaths = [
            '/ldml/dates/calendars/calendar[@type=\'gregorian\']/months/monthContext[@type=\'stand-alone\']/monthWidth',
            //Abreviados
            '/ldml/dates/calendars/calendar[@type=\'gregorian\']/months/monthContext[@type=\'format\']/monthWidth'
            //Meses normales
        ];

        $months = [];
        foreach ($xpaths as $xpath) {
            $monthTypes = $xml->xpath($xpath);
            if (is_array($monthTypes)) {
                foreach ($monthTypes as $monthType) {
                    $names = [];
                    foreach ($monthType->xpath('month') as $month) {
                        $names[(string)$month['type']] = ucfirst((string)$month);
                    }
                    if ($names !== []) {
                        foreach ($names as $type => $name) {
                            $months[(string)$monthType['type']][$type] = $name;
                        }
                    }
                }
            }
        }

        if (!empty($months) && !isset($months[i18n_Locale::TYPE_ABBREVIATED])) {
            $months[i18n_Locale::TYPE_ABBREVIATED] = $months[i18n_Locale::TYPE_WIDE] ?? null;
        }

        foreach ($months as $type => $values) {
            if (in_array($type, [i18n_Locale::TYPE_NARROW, i18n_Locale::TYPE_ABBREVIATED, i18n_Locale::TYPE_WIDE])) {
                if (!empty($months[$type])) {
                    ksort($months[$type]);
                }
            } else {
                unset($months[$type]);
            }
        }

        if (!empty($months)) {
            $data['months'] = $months;
        }
    }

    protected function parseWeekDayNames($xml, array &$data, $locale)
    {
        static $mapping = [
            'sun' => 0,
            'mon' => 1,
            'tue' => 2,
            'wed' => 3,
            'thu' => 4,
            'fri' => 5,
            'sat' => 6,
        ];


        $xpaths = [
            '/ldml/dates/calendars/calendar[@type=\'gregorian\']/days/dayContext[@type=\'stand-alone\']/dayWidth',
            //Abreviados (L M M J V S...)
            '/ldml/dates/calendars/calendar[@type=\'gregorian\']/days/dayContext[@type=\'format\']/dayWidth'
            //Días normales
        ];

        $days = [];
        foreach ($xpaths as $xpath) {
            $dayTypes = $xml->xpath($xpath);
            if (is_array($dayTypes)) {
                foreach ($dayTypes as $dayType) {
                    $names = [];
                    foreach ($dayType->xpath('day') as $day) {
                        $names[$mapping[(string)$day['type']]] = ucfirst((string)$day);
                    }
                    if ($names !== []) {
                        $days[(string)$dayType['type']] = $names;
                    }
                }
            }
        }


        foreach ($days as $type => $values) {
            if (in_array($type, [i18n_Locale::TYPE_NARROW, i18n_Locale::TYPE_ABBREVIATED, i18n_Locale::TYPE_WIDE])) {
                ksort($days[$type]);
            } else {
                unset($days[$type]);
            }
        }

        if (!empty($days)) {
            $data['weekDays'] = $days;
        }

        //First day of week
        $first = $xml->xpath('/ldml/dates/calendars/calendar[@type=\'gregorian\']/week/firstday/@day');
        if (is_array($first) && isset($first[0])) {
            $data['firstDayWeek'] = $mapping[(string)$first[0]];
        } else {
            $parts = explode('_', $locale);
            if (count($parts) >= 2) {
                $days = [
                    'mon' => '001 AD AI AL AM AN AT AX AZ BA BE BG BM BN CH CL CM CR CY CZ DE DK EC EE ES FI FJ FO FR GB GE GF GP GR HR HU IE IS IT KG KZ LB LI LK LT LU LV MC MD ME MK MN MQ MY NL NO PL PT RE RO RS RU SE SI SK SM TJ TM TR UA UY UZ VA VN',
                    'fri' => 'BD MV',
                    'sat' => 'AE AF BH DJ DZ EG IQ IR JO KW LY MA OM QA SA SD SY YE',
                    'sun' => 'AG AR AS AU BR BS BT BW BY BZ CA CN CO DM DO ET GT GU HK HN ID IL IN JM JP KE KH KR LA MH MM MO MT MX MZ NI NP NZ PA PE PH PK PR PY SG SV TH TN TT TW UM US VE VI WS ZA ZW'
                ];
                foreach ($days as $day => $countries) {
                    if (stripos($countries, $parts[1]) !== false) {
                        $data['firstDayWeek'] = $mapping[$day];
                    }
                }
            } else {
                $data['firstDayWeek'] = 1; //En la mayoría de países es el LUnes
            }
        }
    }

    protected function parsePeriodNames($xml, array &$data)
    {
        $am = $xml->xpath(
            '/ldml/dates/calendars/calendar[@type=\'gregorian\']/dayPeriods/dayPeriodContext[@type=\'format\']/dayPeriodWidth[@type=\'wide\']/dayPeriod[@type=\'am\']'
        );
        if (is_array($am) && isset($am[0])) {
            $data['amString'] = (string)$am[0];
        }
        $pm = $xml->xpath(
            '/ldml/dates/calendars/calendar[@type=\'gregorian\']/dayPeriods/dayPeriodContext[@type=\'format\']/dayPeriodWidth[@type=\'wide\']/dayPeriod[@type=\'pm\']'
        );
        if (is_array($pm) && isset($pm[0])) {
            $data['pmString'] = (string)$pm[0];
        }
    }

    protected function parseIntervals($xml, array &$data)
    {
        $units = [
            "year",
            "month",
            "week",
            "day",
            "hour",
            "minute",
            "second",
            'millisecond',
            'microsecond',
            'nanosecond'
        ];
        $intervals = [];
        foreach ($units as $unit) {
            $type = in_array($unit, ['hour', 'minute', 'second', 'millisecond', 'microsecond', 'nanosecond']) ? 'short' : 'long';
            $patterns = $xml->xpath("//unitLength[@type='{$type}']/unit[@type='duration-{$unit}']/unitPattern");
            $plurals = [];
            foreach ($patterns as $pattern) {
                /** @var SimpleXMLElement $pattern */
                $count = null;
                foreach ($pattern->attributes() as $n => $v) {
                    if ($n == 'count') {
                        $count = (string)$v;
                    }
                }

                if (isset($count)) {
                    $plurals[] = "{$count} {" . str_replace('{0}', '#', $pattern) . "}";
                }
            }

            if (!empty($plurals)) {
                $intervals[$unit] = "{n, plural, " . implode(' ', $plurals) . "}";
            }
        }
        if (!empty($intervals)) {
            $data['intervals'] = $intervals;
        }
    }

    protected function parseEraNames($xml, array &$data)
    {
        $era = $xml->xpath('/ldml/dates/calendars/calendar[@type=\'gregorian\']/eras/eraAbbr');
        if (is_array($era) && isset($era[0])) {
            foreach ($era[0]->xpath('era') as $e) {
                $data['eraNames'][i18n_Locale::TYPE_ABBREVIATED][(string)$e['type']] = (string)$e;
            }
        }

        $era = $xml->xpath('/ldml/dates/calendars/calendar[@type=\'gregorian\']/eras/eraNames');
        if (is_array($era) && isset($era[0])) {
            foreach ($era[0]->xpath('era') as $e) {
                $data['eraNames'][i18n_Locale::TYPE_WIDE][(string)$e['type']] = (string)$e;
            }
        } else {
            if (!isset($data['eraNames'][i18n_Locale::TYPE_WIDE])) {
                $data['eraNames'][i18n_Locale::TYPE_WIDE] = $data['eraNames'][i18n_Locale::TYPE_ABBREVIATED];
            }
        }

        $era = $xml->xpath('/ldml/dates/calendars/calendar[@type=\'gregorian\']/eras/eraNarrow');
        if (is_array($era) && isset($era[0])) {
            foreach ($era[0]->xpath('era') as $e) {
                $data['eraNames'][i18n_Locale::TYPE_NARROW][(string)$e['type']] = (string)$e;
            }
        } else {
            if (!isset($data['eraNames'][i18n_Locale::TYPE_NARROW])) {
                $data['eraNames'][i18n_Locale::TYPE_NARROW] = $data['eraNames'][i18n_Locale::TYPE_ABBREVIATED];
            }
        }
    }

    protected function parseDateFormats($xml, array &$data)
    {
        $types = $xml->xpath('//calendar[@type=\'gregorian\']/dateFormats/dateFormatLength');
        if (is_array($types) && !empty($types)) {
            $formats = [];
            foreach ($types as $type) {
                $pattern = $type->xpath('dateFormat/pattern');
                $formats[(string)$type['type']] = (string)$pattern[0];
            }
            if (isset($formats['long']) || isset($formats['full'])) {
                $data['longDate'] = $this->_dateDonverter->convert(
                    $formats['long'] ?? $formats['full']
                );
            }
            if (isset($formats['medium']) || isset($formats['short'])) {
                $data['shortDate'] = $this->_dateDonverter->convert(
                    $formats['medium'] ?? $formats['short']
                );
            }
        }
    }

    protected function parseTimeFormats($xml, array &$data)
    {
        $types = $xml->xpath('//calendar[@type=\'gregorian\']/timeFormats/timeFormatLength');
        if (is_array($types) && !empty($types)) {
            $formats = [];
            foreach ($types as $type) {
                $pattern = $type->xpath('timeFormat/pattern');
                $formats[(string)$type['type']] = (string)$pattern[0];
            }
            if (isset($formats['long']) || isset($formats['medium'])) {
                $data['longTime'] = $this->_dateDonverter->convert($formats['medium'] ?? $formats['long']);
            }
            if (isset($formats['medium']) || isset($formats['short'])) {
                $data['shortTime'] = $this->_dateDonverter->convert($formats['short'] ?? $formats['medium']);
            }
        }
    }

    protected function parseDateTimeFormat($xml, array &$data)
    {
        $types = $xml->xpath(
            "//calendar[@type='gregorian']/dateTimeFormats/dateTimeFormatLength[@type='medium']"
        );
        if (is_array($types) && isset($types[0])) {
            $pattern = $types[0]->xpath('dateTimeFormat/pattern');
            $data['dateTime'] = str_replace(['{1}', '{0}'], ['%date%', '%time%'], (string)$pattern[0]);
        }
    }

    protected function parseOrientation($xml, array &$data)
    {
        $orientation = $xml->xpath('/ldml/layout/orientation[@characters=\'right-to-left\']');
        if (!empty($orientation)) {
            $data['orientation'] = 'rtl';
        } else {
            if (!isset($data['orientation'])) {
                $data['orientation'] = 'ltr';
            }
        }
    }

}

class PhpArrayGetter
{

    public $_data;
    private $_function_name;
    private $_param_name;
    private $_default_value;

    public function __construct($function_name, $data, $param_name, $default_value = null)
    {
        $this->_function_name = $function_name;
        $this->_data = $data;
        $this->_param_name = $param_name;
        $this->_default_value = $default_value;
    }

    public function render()
    {
        $cases = [];
        foreach ($this->_data as $key => $value) {
            $key = var_export($key, true);
            $value = var_export($value, true);
            $value = str_replace("\n", "\n                    ", $value);
            $cases[] = "            case $key:
                return $value;";
        }
        return
            "function {$this->_function_name}(\${$this->_param_name} = " . var_export($this->_default_value, true) . "){
        switch(\${$this->_param_name}) {
" . implode("\n", $cases) . "
        }
    }";
    }

}