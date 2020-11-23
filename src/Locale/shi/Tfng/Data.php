<?php
declare(strict_types=1);

/**
 * Locale data for 'shi-Tfng'.
 * Created: Sun, 22 Nov 2020 20:21:50 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_shi_Tfng_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'shi';
        $this->locale = 'shi-Tfng';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'ⵜⵉⴼⴰⵡⵜ';
        $this->pmString = 'ⵜⴰⴷⴳⴳⵯⴰⵜ';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ⵉ',
                      2 => 'ⴱ',
                      3 => 'ⵎ',
                      4 => 'ⵉ',
                      5 => 'ⵎ',
                      6 => 'ⵢ',
                      7 => 'ⵢ',
                      8 => 'ⵖ',
                      9 => 'ⵛ',
                      10 => 'ⴽ',
                      11 => 'ⵏ',
                      12 => 'ⴷ',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'ⵉⵏⵏ',
                      2 => 'ⴱⵕⴰ',
                      3 => 'ⵎⴰⵕ',
                      4 => 'ⵉⴱⵔ',
                      5 => 'ⵎⴰⵢ',
                      6 => 'ⵢⵓⵏ',
                      7 => 'ⵢⵓⵍ',
                      8 => 'ⵖⵓⵛ',
                      9 => 'ⵛⵓⵜ',
                      10 => 'ⴽⵜⵓ',
                      11 => 'ⵏⵓⵡ',
                      12 => 'ⴷⵓⵊ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'ⵉⵏⵏⴰⵢⵔ',
                      2 => 'ⴱⵕⴰⵢⵕ',
                      3 => 'ⵎⴰⵕⵚ',
                      4 => 'ⵉⴱⵔⵉⵔ',
                      5 => 'ⵎⴰⵢⵢⵓ',
                      6 => 'ⵢⵓⵏⵢⵓ',
                      7 => 'ⵢⵓⵍⵢⵓⵣ',
                      8 => 'ⵖⵓⵛⵜ',
                      9 => 'ⵛⵓⵜⴰⵏⴱⵉⵔ',
                      10 => 'ⴽⵜⵓⴱⵔ',
                      11 => 'ⵏⵓⵡⴰⵏⴱⵉⵔ',
                      12 => 'ⴷⵓⵊⴰⵏⴱⵉⵔ',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'ⴰⵙⴰ',
                      1 => 'ⴰⵢⵏ',
                      2 => 'ⴰⵙⵉ',
                      3 => 'ⴰⴽⵕ',
                      4 => 'ⴰⴽⵡ',
                      5 => 'ⴰⵙⵉⵎ',
                      6 => 'ⴰⵙⵉⴹ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'ⴰⵙⴰⵎⴰⵙ',
                      1 => 'ⴰⵢⵏⴰⵙ',
                      2 => 'ⴰⵙⵉⵏⴰⵙ',
                      3 => 'ⴰⴽⵕⴰⵙ',
                      4 => 'ⴰⴽⵡⴰⵙ',
                      5 => 'ⵙⵉⵎⵡⴰⵙ',
                      6 => 'ⴰⵙⵉⴹⵢⴰⵙ',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'M',
                      2 => 'T',
                      3 => 'W',
                      4 => 'T',
                      5 => 'F',
                      6 => 'S',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# year} other {# years}}',
              'month' => '{n, plural, one {# month} other {# months}}',
              'week' => '{n, plural, one {# week} other {# weeks}}',
              'day' => '{n, plural, one {# day} other {# days}}',
              'hour' => '{n, plural, one {# hr} other {# hr}}',
              'minute' => '{n, plural, one {# min} other {# min}}',
              'second' => '{n, plural, one {# sec} other {# sec}}',
              'millisecond' => '{n, plural, one {# ms} other {# ms}}',
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
