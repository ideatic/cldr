<?php
declare(strict_types=1);

/**
 * Locale data for 'om-KE'.
 * Created: Sun, 22 Nov 2020 20:21:38 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_om_KE_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '¤%f';
        $this->language = 'om';
        $this->locale = 'om-KE';
        $this->firstDayWeek = 0;
        $this->longDate = 'd F Y';
        $this->shortDate = 'd-M-Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'WD';
        $this->pmString = 'WB';
        $this->nameEnglish = 'Oromo (Kenya)';
        $this->nameNative = 'Oromoo (Keeniyaa)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'A',
                      2 => 'G',
                      3 => 'B',
                      4 => 'E',
                      5 => 'C',
                      6 => 'W',
                      7 => 'A',
                      8 => 'H',
                      9 => 'F',
                      10 => 'O',
                      11 => 'S',
                      12 => 'M',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return NULL;
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Amajjii',
                      2 => 'Guraandhala',
                      3 => 'Bitooteessa',
                      4 => 'Elba',
                      5 => 'Caamsa',
                      6 => 'Waxabajjii',
                      7 => 'Adooleessa',
                      8 => 'Hagayya',
                      9 => 'Fuulbana',
                      10 => 'Onkololeessa',
                      11 => 'Sadaasa',
                      12 => 'Muddee',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'W',
                      2 => 'Q',
                      3 => 'R',
                      4 => 'K',
                      5 => 'J',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dil',
                      1 => 'Wix',
                      2 => 'Qib',
                      3 => 'Rob',
                      4 => 'Kam',
                      5 => 'Jim',
                      6 => 'San',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Dilbata',
                      1 => 'Wiixata',
                      2 => 'Qibxata',
                      3 => 'Roobii',
                      4 => 'Kamiisa',
                      5 => 'Jimaata',
                      6 => 'Sanbata',
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