<?php
declare(strict_types=1);

/**
 * Locale data for 'sr-Latn-XK'.
 * Created: Sun, 22 Nov 2020 20:21:54 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sr_Latn_XK_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'sr';
        $this->locale = 'sr-Latn-XK';
        $this->firstDayWeek = 1;
        $this->longDate = 'd. F Y.';
        $this->shortDate = 'd.m.Y.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'pre podne';
        $this->pmString = 'po podne';
        $this->nameEnglish = 'Serbian';
        $this->nameNative = 'Српски';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      3 => 'Mart',
                      5 => 'Maj',
                      6 => 'Jun',
                      7 => 'Jul',
                      9 => 'Sept',
                    );
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
                      1 => 'Januar',
                      2 => 'Februar',
                      3 => 'Mart',
                      4 => 'April',
                      5 => 'Maj',
                      6 => 'Jun',
                      7 => 'Jul',
                      8 => 'Avgust',
                      9 => 'Septembar',
                      10 => 'Oktobar',
                      11 => 'Novembar',
                      12 => 'Decembar',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Ned',
                      1 => 'Pon',
                      2 => 'Uto',
                      3 => 'Sre',
                      4 => 'čet',
                      5 => 'Pet',
                      6 => 'Sub',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'N',
                      1 => 'P',
                      2 => 'U',
                      3 => 'S',
                      4 => 'č',
                      5 => 'P',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Nedelja',
                      1 => 'Ponedeljak',
                      2 => 'Utorak',
                      3 => 'Sreda',
                      4 => 'četvrtak',
                      5 => 'Petak',
                      6 => 'Subota',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# godina} few {# godine} other {# godina}}',
              'month' => '{n, plural, one {# mesec} few {# meseca} other {# meseci}}',
              'week' => '{n, plural, one {# nedelja} few {# nedelje} other {# nedelja}}',
              'day' => '{n, plural, one {# dan} few {# dana} other {# dana}}',
              'hour' => '{n, plural, one {# sat} few {# sata} other {# sati}}',
              'minute' => '{n, plural, one {# min} few {# min} other {# min}}',
              'second' => '{n, plural, one {# sek} few {# sek} other {# sek}}',
              'millisecond' => '{n, plural, one {# ms} few {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {# μs} few {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# ns} few {# ns} other {# ns}}',
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
