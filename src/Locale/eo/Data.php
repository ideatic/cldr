<?php
declare(strict_types=1);

/**
 * Locale data for 'eo'.
 * Created: Sun, 22 Nov 2020 20:20:46 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_eo_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'eo';
        $this->locale = 'eo';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y-F-d';
        $this->shortDate = 'Y-M-d';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'atm';
        $this->pmString = 'ptm';
        $this->nameEnglish = 'Esperanto';
        $this->nameNative = 'Esperanto';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'J',
                      2 => 'F',
                      3 => 'M',
                      4 => 'A',
                      5 => 'M',
                      6 => 'J',
                      7 => 'J',
                      8 => 'A',
                      9 => 'S',
                      10 => 'O',
                      11 => 'N',
                      12 => 'D',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Januaro',
                      2 => 'Februaro',
                      3 => 'Marto',
                      4 => 'Aprilo',
                      5 => 'Majo',
                      6 => 'Junio',
                      7 => 'Julio',
                      8 => 'Aŭgusto',
                      9 => 'Septembro',
                      10 => 'Oktobro',
                      11 => 'Novembro',
                      12 => 'Decembro',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan',
                      2 => 'Feb',
                      3 => 'Mar',
                      4 => 'Apr',
                      5 => 'Maj',
                      6 => 'Jun',
                      7 => 'Jul',
                      8 => 'Aŭg',
                      9 => 'Sep',
                      10 => 'Okt',
                      11 => 'Nov',
                      12 => 'Dec',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'L',
                      2 => 'M',
                      3 => 'M',
                      4 => 'Ĵ',
                      5 => 'V',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Dimanĉo',
                      1 => 'Lundo',
                      2 => 'Mardo',
                      3 => 'Merkredo',
                      4 => 'ĵaŭdo',
                      5 => 'Vendredo',
                      6 => 'Sabato',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Di',
                      1 => 'Lu',
                      2 => 'Ma',
                      3 => 'Me',
                      4 => 'ĵa',
                      5 => 'Ve',
                      6 => 'Sa',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# jaro} other {# jaroj}}',
              'month' => '{n, plural, one {# monato} other {# monatoj}}',
              'week' => '{n, plural, one {# semajno} other {# semajnoj}}',
              'day' => '{n, plural, one {# tago} other {# tagoj}}',
              'hour' => '{n, plural, one {# h.} other {# h.}}',
              'minute' => '{n, plural, one {# m.} other {# m.}}',
              'second' => '{n, plural, one {# s.} other {# s.}}',
              'millisecond' => '{n, plural, one {# ms.} other {# ms.}}',
              'microsecond' => '{n, plural, one {# µs} other {# µs}}',
              'nanosecond' => '{n, plural, one {# ns} other {# ns}}',
            );
                }

        public function currencies(): array{
                   return require __DIR__ . DIRECTORY_SEPARATOR . 'Currencies.php';
                }

        public function languages(): array{
                   return require __DIR__ . DIRECTORY_SEPARATOR . 'Languages.php';
                }

        public function territories(): array{
                   return require __DIR__ . DIRECTORY_SEPARATOR . 'Territories.php';
                }
}
