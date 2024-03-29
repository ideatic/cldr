<?php

declare(strict_types=1);

/**
 * Helper para el manipulado y formateado de países y territorios
 */
abstract class i18n_Territories
{

    /**
     * Obtiene el nombre de un país dado su código ISO 3166-1 alfa-2
     */
    public static function format(string $code, string $locale = 'en'): ?string
    {
        $locale = i18n_Locale::factory($locale);

        if (strlen($code) == 3) {
            $code = self::alpha3to2($code, false);
        } else {
            $code = strtoupper($code);
        }

        return $code ? ($locale->territories()[$code] ?? null) : null;
    }


    /**
     * Obtiene el código de un país dado su nombre completo en el locale destino
     */
    public static function parse(string $name, string $locale = 'en'): ?string
    {
        $locale = i18n_Locale::factory($locale);

        foreach ($locale->territories() as $iso => $n) {
            if (strcasecmp($name, $n) == 0) {
                return $iso;
            }
        }

        return null;
    }


    /**
     * Comprueba si el código ISO 3166-1 alfa-2 indicado es un país válido
     */
    public static function isValid(string $alpha2): bool
    {
        return array_key_exists(strtoupper($alpha2), i18n_Locale::factory('en')->territories());
    }

    /**
     * Convierte un código de país ISO 3166-1 alpha 3 a ISO 3166-1 alpha 2
     */
    public static function alpha3to2(string $alpha3, bool $throw = true): ?string
    {
        $replacements = [
            'AFG' => 'AF',
            'ALA' => 'AX',
            'ALB' => 'AL',
            'DZA' => 'DZ',
            'ASM' => 'AS',
            'AND' => 'AD',
            'AGO' => 'AO',
            'AIA' => 'AI',
            'ATA' => 'AQ',
            'ATG' => 'AG',
            'ARG' => 'AR',
            'ARM' => 'AM',
            'ABW' => 'AW',
            'AUS' => 'AU',
            'AUT' => 'AT',
            'AZE' => 'AZ',
            'BHS' => 'BS',
            'BHR' => 'BH',
            'BGD' => 'BD',
            'BRB' => 'BB',
            'BLR' => 'BY',
            'BEL' => 'BE',
            'BLZ' => 'BZ',
            'BEN' => 'BJ',
            'BMU' => 'BM',
            'BTN' => 'BT',
            'BOL' => 'BO',
            'BES' => 'BQ',
            'BIH' => 'BA',
            'BWA' => 'BW',
            'BVT' => 'BV',
            'BRA' => 'BR',
            'IOT' => 'IO',
            'BRN' => 'BN',
            'BGR' => 'BG',
            'BFA' => 'BF',
            'BDI' => 'BI',
            'CPV' => 'CV',
            'KHM' => 'KH',
            'CMR' => 'CM',
            'CAN' => 'CA',
            'CYM' => 'KY',
            'CAF' => 'CF',
            'TCD' => 'TD',
            'CHL' => 'CL',
            'CHN' => 'CN',
            'CXR' => 'CX',
            'CCK' => 'CC',
            'COL' => 'CO',
            'COM' => 'KM',
            'COG' => 'CG',
            'COD' => 'CD',
            'COK' => 'CK',
            'CRI' => 'CR',
            'CIV' => 'CI',
            'HRV' => 'HR',
            'CUB' => 'CU',
            'CUW' => 'CW',
            'CYP' => 'CY',
            'CZE' => 'CZ',
            'DNK' => 'DK',
            'DEN' => 'DK',
            'DJI' => 'DJ',
            'DMA' => 'DM',
            'DOM' => 'DO',
            'ECU' => 'EC',
            'EGY' => 'EG',
            'SLV' => 'SV',
            'GNQ' => 'GQ',
            'ERI' => 'ER',
            'EST' => 'EE',
            'ETH' => 'ET',
            'SWZ' => 'SZ',
            'FLK' => 'FK',
            'FRO' => 'FO',
            'FJI' => 'FJ',
            'FIN' => 'FI',
            'FRA' => 'FR',
            'GUF' => 'GF',
            'PYF' => 'PF',
            'ATF' => 'TF',
            'GAB' => 'GA',
            'GMB' => 'GM',
            'GEO' => 'GE',
            'DEU' => 'DE',
            'GHA' => 'GH',
            'GIB' => 'GI',
            'GRC' => 'GR',
            'GRL' => 'GL',
            'GRD' => 'GD',
            'GLP' => 'GP',
            'GUM' => 'GU',
            'GTM' => 'GT',
            'GGY' => 'GG',
            'GIN' => 'GN',
            'GNB' => 'GW',
            'GUY' => 'GY',
            'HTI' => 'HT',
            'HMD' => 'HM',
            'VAT' => 'VA',
            'HND' => 'HN',
            'HKG' => 'HK',
            'HUN' => 'HU',
            'ISL' => 'IS',
            'IND' => 'IN',
            'IDN' => 'ID',
            'IRN' => 'IR',
            'IRQ' => 'IQ',
            'IRL' => 'IE',
            'IMN' => 'IM',
            'ISR' => 'IL',
            'ITA' => 'IT',
            'JAM' => 'JM',
            'JPN' => 'JP',
            'JEY' => 'JE',
            'JOR' => 'JO',
            'KAZ' => 'KZ',
            'KEN' => 'KE',
            'KIR' => 'KI',
            'PRK' => 'KP',
            'KOR' => 'KR',
            'KWT' => 'KW',
            'KGZ' => 'KG',
            'LAO' => 'LA',
            'LVA' => 'LV',
            'LBN' => 'LB',
            'LSO' => 'LS',
            'LBR' => 'LR',
            'LBY' => 'LY',
            'LIE' => 'LI',
            'LTU' => 'LT',
            'LUX' => 'LU',
            'MAC' => 'MO',
            'MKD' => 'MK',
            'MDG' => 'MG',
            'MWI' => 'MW',
            'MYS' => 'MY',
            'MDV' => 'MV',
            'MLI' => 'ML',
            'MLT' => 'MT',
            'MHL' => 'MH',
            'MTQ' => 'MQ',
            'MRT' => 'MR',
            'MUS' => 'MU',
            'MYT' => 'YT',
            'MEX' => 'MX',
            'FSM' => 'FM',
            'MDA' => 'MD',
            'MCO' => 'MC',
            'MNG' => 'MN',
            'MNE' => 'ME',
            'MSR' => 'MS',
            'MAR' => 'MA',
            'MOZ' => 'MZ',
            'MMR' => 'MM',
            'NAM' => 'NA',
            'NRU' => 'NR',
            'NPL' => 'NP',
            'NLD' => 'NL',
            'NED' => 'NL',
            'NCL' => 'NC',
            'NZL' => 'NZ',
            'NIC' => 'NI',
            'NER' => 'NE',
            'NGA' => 'NG',
            'NIU' => 'NU',
            'NFK' => 'NF',
            'MNP' => 'MP',
            'NOR' => 'NO',
            'OMN' => 'OM',
            'PAK' => 'PK',
            'PLW' => 'PW',
            'PSE' => 'PS',
            'PAN' => 'PA',
            'PNG' => 'PG',
            'PRY' => 'PY',
            'PER' => 'PE',
            'PHL' => 'PH',
            'PCN' => 'PN',
            'POL' => 'PL',
            'PRT' => 'PT',
            'PRI' => 'PR',
            'QAT' => 'QA',
            'REU' => 'RE',
            'ROU' => 'RO',
            'RUS' => 'RU',
            'RWA' => 'RW',
            'BLM' => 'BL',
            'SHN' => 'SH',
            'KNA' => 'KN',
            'LCA' => 'LC',
            'MAF' => 'MF',
            'SPM' => 'PM',
            'VCT' => 'VC',
            'WSM' => 'WS',
            'SMR' => 'SM',
            'STP' => 'ST',
            'SAU' => 'SA',
            'SEN' => 'SN',
            'SRB' => 'RS',
            'SYC' => 'SC',
            'SLE' => 'SL',
            'SGP' => 'SG',
            'SXM' => 'SX',
            'SVK' => 'SK',
            'SVN' => 'SI',
            'SLB' => 'SB',
            'SOM' => 'SO',
            'ZAF' => 'ZA',
            'SGS' => 'GS',
            'SSD' => 'SS',
            'ESP' => 'ES',
            'LKA' => 'LK',
            'SDN' => 'SD',
            'SUR' => 'SR',
            'SJM' => 'SJ',
            'SWE' => 'SE',
            'CHE' => 'CH',
            'SYR' => 'SY',
            'TWN' => 'TW',
            'TJK' => 'TJ',
            'TZA' => 'TZ',
            'THA' => 'TH',
            'TLS' => 'TL',
            'TGO' => 'TG',
            'TKL' => 'TK',
            'TON' => 'TO',
            'TTO' => 'TT',
            'TUN' => 'TN',
            'TUR' => 'TR',
            'TKM' => 'TM',
            'TCA' => 'TC',
            'TUV' => 'TV',
            'UGA' => 'UG',
            'UKR' => 'UA',
            'ARE' => 'AE',
            'GBR' => 'GB',
            'USA' => 'US',
            'UMI' => 'UM',
            'URY' => 'UY',
            'UZB' => 'UZ',
            'VUT' => 'VU',
            'VEN' => 'VE',
            'VNM' => 'VN',
            'VGB' => 'VG',
            'VIR' => 'VI',
            'WLF' => 'WF',
            'ESH' => 'EH',
            'YEM' => 'YE',
            'ZMB' => 'ZM',
            'ZWE' => 'ZW',
        ];

        $alpha3 = strtoupper($alpha3);
        if (!isset($replacements[$alpha3])) {
            if ($throw) {
                throw new Exception("Invalid country {$alpha3}");
            } else {
                return null;
            }
        }

        return $replacements[$alpha3];
    }
}
