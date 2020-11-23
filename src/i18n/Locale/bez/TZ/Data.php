<?php
declare(strict_types=1);

/**
 * Locale data for 'bez-TZ'.
 * Created: Sun, 22 Nov 2020 20:20:25 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_bez_TZ_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'bez';
        $this->locale = 'bez-TZ';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'pamilau';
        $this->pmString = 'pamunyi';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'H',
                      2 => 'V',
                      3 => 'D',
                      4 => 'T',
                      5 => 'H',
                      6 => 'S',
                      7 => 'S',
                      8 => 'N',
                      9 => 'T',
                      10 => 'K',
                      11 => 'K',
                      12 => 'K',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Hut',
                      2 => 'Vil',
                      3 => 'Dat',
                      4 => 'Tai',
                      5 => 'Han',
                      6 => 'Sit',
                      7 => 'Sab',
                      8 => 'Nan',
                      9 => 'Tis',
                      10 => 'Kum',
                      11 => 'Kmj',
                      12 => 'Kmb',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Pa mwedzi gwa hutala',
                      2 => 'Pa mwedzi gwa wuvili',
                      3 => 'Pa mwedzi gwa wudatu',
                      4 => 'Pa mwedzi gwa wutai',
                      5 => 'Pa mwedzi gwa wuhanu',
                      6 => 'Pa mwedzi gwa sita',
                      7 => 'Pa mwedzi gwa saba',
                      8 => 'Pa mwedzi gwa nane',
                      9 => 'Pa mwedzi gwa tisa',
                      10 => 'Pa mwedzi gwa kumi',
                      11 => 'Pa mwedzi gwa kumi na moja',
                      12 => 'Pa mwedzi gwa kumi na mbili',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'M',
                      1 => 'J',
                      2 => 'H',
                      3 => 'H',
                      4 => 'H',
                      5 => 'W',
                      6 => 'J',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Mul',
                      1 => 'Vil',
                      2 => 'Hiv',
                      3 => 'Hid',
                      4 => 'Hit',
                      5 => 'Hih',
                      6 => 'Lem',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Pa mulungu',
                      1 => 'Pa shahuviluha',
                      2 => 'Pa hivili',
                      3 => 'Pa hidatu',
                      4 => 'Pa hitayi',
                      5 => 'Pa hihanu',
                      6 => 'Pa shahulembela',
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