<?php
declare(strict_types=1);

/**
 * Locale data for 'gv'.
 * Created: Sun, 22 Nov 2020 20:21:03 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_gv_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'gv';
        $this->locale = 'gv';
        $this->firstDayWeek = 1;
        $this->longDate = 'd F Y';
        $this->shortDate = 'M d, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'a.m.';
        $this->pmString = 'p.m.';
        $this->nameEnglish = 'Manx';
        $this->nameNative = 'Gaelg';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'J-guer',
                      2 => 'T-arree',
                      3 => 'Mayrnt',
                      4 => 'Avrril',
                      5 => 'Boaldyn',
                      6 => 'M-souree',
                      7 => 'J-souree',
                      8 => 'Luanistyn',
                      9 => 'M-fouyir',
                      10 => 'J-fouyir',
                      11 => 'M-Houney',
                      12 => 'M-Nollick',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Jerrey-geuree',
                      2 => 'Toshiaght-arree',
                      3 => 'Mayrnt',
                      4 => 'Averil',
                      5 => 'Boaldyn',
                      6 => 'Mean-souree',
                      7 => 'Jerrey-souree',
                      8 => 'Luanistyn',
                      9 => 'Mean-fouyir',
                      10 => 'Jerrey-fouyir',
                      11 => 'Mee Houney',
                      12 => 'Mee ny Nollick',
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
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Jed',
                      1 => 'Jel',
                      2 => 'Jem',
                      3 => 'Jerc',
                      4 => 'Jerd',
                      5 => 'Jeh',
                      6 => 'Jes',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Jedoonee',
                      1 => 'Jelhein',
                      2 => 'Jemayrt',
                      3 => 'Jercean',
                      4 => 'Jerdein',
                      5 => 'Jeheiney',
                      6 => 'Jesarn',
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
