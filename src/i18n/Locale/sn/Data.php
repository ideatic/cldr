<?php
declare(strict_types=1);

/**
 * Locale data for 'sn'.
 * Created: Sun, 22 Nov 2020 20:21:51 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sn_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'sn';
        $this->locale = 'sn';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Shona';
        $this->nameNative = 'ChiShona';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Ndi',
                      2 => 'Kuk',
                      3 => 'Kur',
                      4 => 'Kub',
                      5 => 'Chv',
                      6 => 'Chk',
                      7 => 'Chg',
                      8 => 'Nya',
                      9 => 'Gun',
                      10 => 'Gum',
                      11 => 'Mbu',
                      12 => 'Zvi',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'N',
                      2 => 'K',
                      3 => 'K',
                      4 => 'K',
                      5 => 'C',
                      6 => 'C',
                      7 => 'C',
                      8 => 'N',
                      9 => 'G',
                      10 => 'G',
                      11 => 'M',
                      12 => 'Z',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Ndira',
                      2 => 'Kukadzi',
                      3 => 'Kurume',
                      4 => 'Kubvumbi',
                      5 => 'Chivabvu',
                      6 => 'Chikumi',
                      7 => 'Chikunguru',
                      8 => 'Nyamavhuvhu',
                      9 => 'Gunyana',
                      10 => 'Gumiguru',
                      11 => 'Mbudzi',
                      12 => 'Zvita',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Svo',
                      1 => 'Muv',
                      2 => 'Chp',
                      3 => 'Cht',
                      4 => 'Chn',
                      5 => 'Chs',
                      6 => 'Mug',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'M',
                      2 => 'C',
                      3 => 'C',
                      4 => 'C',
                      5 => 'C',
                      6 => 'M',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Svondo',
                      1 => 'Muvhuro',
                      2 => 'Chipiri',
                      3 => 'Chitatu',
                      4 => 'China',
                      5 => 'Chishanu',
                      6 => 'Mugovera',
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