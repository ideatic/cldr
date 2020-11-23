<?php

declare(strict_types=1);

/**
 * Representa los datos de una cultura, como el separador de miles, moneda, calendario, etc.
 * La información cultural se ha obtenido del proyecto CLDR http://cldr.unicode.org/
 */
abstract class i18n_Locale
{
    /**
     * Representa un elemento cultural (día de mes o semana, intervalos, etc.) en formato ancho
     */
    public const TYPE_WIDE = 'wide';
    /**
     * Representa un elemento cultural (día de mes o semana, intervalos, etc.) en formato abreviado
     */
    public const TYPE_ABBREVIATED = 'abbreviated';
    /**
     * Representa un elemento cultural (día de mes o semana, intervalos, etc.) en el formato más corto posible
     */
    public const TYPE_NARROW = 'narrow';

    /* Información del locale */

    public string $language;
    public string $locale;
    public string $nameNative;
    public string $nameEnglish;
    public string $orientation;

    /* Números */
    public string $decimalSeparator = '.';
    public string $groupSeparator = ',';

    /* Fechas */
    public string $longDate;
    public string $shortDate;
    public string $longTime;
    public string $shortTime;
    public string $dateTime;
    public string $amString;
    public string $pmString;
    public int $firstDayWeek;

    /* Moneda */
    public string $currency;
    public string $currencyFormat;
    public string $currencyNegativeFormat;

    /**
     * Obtiene el número de la forma plural a utilizar
     *
     * @param int $n Cantidad que se quiere pluralizar
     *
     * @return int
     */
    /*  public function plural_form($n) {
      return $n != 1 ? 1 : 0;
      } */

    /**
     * Obtiene una lista con el nombre de todos los meses
     *
     * @param i18n_Locale::TYPE_* $type Ancho utilizado para los meses (wide, abbreviated, narrow)
     *
     * @return string[]
     */
    public abstract function months($type = i18n_Locale::TYPE_WIDE): array;

    /**
     * Obtiene una lista con el nombre de todos los días de la semana
     *
     * @param i18n_Locale::TYPE_* $type Ancho utilizado para los días de la semana (wide, abbreviated, narrow)
     *
     * @return string[]
     */
    public abstract function weekDays($type = i18n_Locale::TYPE_WIDE): array;

    /**
     * Obtiene las cadenas de texto traducibles que representan los intervalos de año, mes, semana, día, hora, minuto y segundo, en ese orden
     * @return string[]
     */
    public abstract function intervals(): array;

    /**
     * Obtiene una lista de todos los países del mundo, en formato $codigo => $nombre.
     * El nombre de los países se obtiene traducido a la lengua representada por esta cultura.
     * El código se corresponde con el estándar ISO 3166-1 alfa-2
     * @return array<string, string>
     */
    public abstract function territories(): array;

    /**
     * Obtiene una lista de todos los idiomas en formato $codigo => $nombre
     * El nombre de los idiomas se obtiene traducido a la lengua representada por esta cultura.
     * El código se corresponde con el estándar ISO 639-1.
     * @return array<string, string>
     */
    public abstract function languages(): array;

    /* Moneda */
    /**
     * Obtiene una lista de todos los tipos de monedas, en formato $codigo=>$nombre
     * El código se corresponde con el estándar ISO 4217
     * @return string[]
     */
    public abstract function currencies(): array;


    /**
     * Carga una cultura especificada
     *
     * @param string|string[] $locale Referencia cultural en formato RFC 3066, vacío para cargar la cultura neutra. Si se indica un array de strings, se devolverá el primer locale válido encontrado en él.
     *
     * @throws InvalidArgumentException
     */
    public static function factory($locale): self
    {
        if (!is_array($locale)) {
            $locale = self::getVariants($locale);
        }

        foreach ($locale as $code) {
            // Nombre de la clase que representa el locale
            $className = 'i18n_Locale_' . str_replace('-', '_', $code) . '_Data';
            if (!class_exists($className, false)) {
                $path = __DIR__ . '/Locale/' . str_replace('-', '/', $code) . '/Data.php';

                if (is_file($path)) {
                    require $path;
                    return new $className();
                }
            } else {
                return new $className();
            }
        }

        throw new InvalidArgumentException("The culture '{$locale[0]}' does not exist or is invalid");
    }

    /**
     * Obtiene una lista de todos los locales disponibles
     */
    public static function available(string $locale): bool
    {
        return is_file(__DIR__ . '/Locale/' . str_replace('-', '/', $locale) . '/Data.php');
    }

    /**
     * Obtiene el idioma que se puede utilizar de reemplazo por otro
     */
    public static function getFallback(string $locale): array
    {
        $locale = str_replace('_', '-', $locale);

        if (in_array($locale, ['eu', 'eu-ES', 'ca', 'ca-ES', 'gl', 'gl-ES'])) {
            return ['es'];
        } elseif (in_array(
            $locale,
            [
                'es-AR',
                'es-BO',
                'es-BR',
                'es-BZ',
                'es-CL',
                'es-CO',
                'es-CR',
                'es-CU',
                'es-DO',
                'es-EC',
                'es-GT',
                'es-HN',
                'es-MX',
                'es-NI',
                'es-PA',
                'es-PE',
                'es-PR',
                'es-PY',
                'es-SV',
                'es-US',
                'es-UY',
                'es-VE'
            ]
        )) {
            return ['es-419', 'es'];
        }

        return [];
    }

    /**
     * Analiza un código RFC de una cultura, y devuelve un array con todas sus variantes válidas,
     * ordenado desde la más específica hasta la más neutra.
     * P.ej.:
     *  locale_variants('es_es') devolverá: ['es-ES', 'es')]
     *
     * locale_variants('az-Cyrl-AZ') devolverá: ['az_Cyrl_AZ', 'az_AZ', 'az']
     *
     * @return string[]
     */
    public static function getVariants(string $locale): array
    {
        if (empty($locale)) {
            return ['default'];
        } else {
            if (strpos($locale, '_') !== false) { // Aceptar referencias con _ y - como separador
                $locale = str_replace('_', '-', $locale);
            }

            if (strpos($locale, '-') === false) { // La referencia cultura solo incluye el idioma
                return [strtolower($locale)];
            }

            $parts = explode('-', $locale);
            $language = strtolower($parts[0]);
            if (count($parts) > 2) {
                $script = ucfirst($parts[1]);
                $region = strtoupper($parts[2]);
            } else {
                $region = strtoupper($parts[1]);
            }
        }

        $codes = [];
        if (isset($script)) {
            $codes[] = "{$language}-{$script}-{$region}"; // Referencia completa (idioma, región y sistema de escritura)
        }
        if ($region) {
            $codes[] = "{$language}-{$region}"; // Referencia completa (idioma y región)
        }
        $codes[] = (string)$language; // Referencia neutra (sólo idioma)

        return $codes;
    }
}
