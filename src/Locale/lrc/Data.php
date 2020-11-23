<?php
declare(strict_types=1);

/**
 * Locale data for 'lrc'.
 * Created: Sun, 22 Nov 2020 20:21:23 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_lrc_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'lrc';
        $this->locale = 'lrc';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'جانڤیە',
                      2 => 'فئڤریە',
                      3 => 'مارس',
                      4 => 'آڤریل',
                      5 => 'مئی',
                      6 => 'جوٙأن',
                      7 => 'جوٙلا',
                      8 => 'آگوست',
                      9 => 'سئپتامر',
                      10 => 'ئوکتوڤر',
                      11 => 'نوڤامر',
                      12 => 'دئسامر',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => '1',
                      2 => '2',
                      3 => '3',
                      4 => '4',
                      5 => '5',
                      6 => '6',
                      7 => '7',
                      8 => '8',
                      9 => '9',
                      10 => '10',
                      11 => '11',
                      12 => '12',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'جانڤیە',
                      2 => 'فئڤریە',
                      3 => 'مارس',
                      4 => 'آڤریل',
                      5 => 'مئی',
                      6 => 'جوٙأن',
                      7 => 'جوٙلا',
                      8 => 'آگوست',
                      9 => 'سئپتامر',
                      10 => 'ئوکتوڤر',
                      11 => 'نوڤامر',
                      12 => 'دئسامر',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Sun',
                      1 => 'Mon',
                      2 => 'Tue',
                      3 => 'Wed',
                      4 => 'Thu',
                      5 => 'Fri',
                      6 => 'Sat',
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
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Sun',
                      1 => 'Mon',
                      2 => 'Tue',
                      3 => 'Wed',
                      4 => 'Thu',
                      5 => 'Fri',
                      6 => 'Sat',
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
