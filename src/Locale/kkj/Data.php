<?php
declare(strict_types=1);

/**
 * Locale data for 'kkj'.
 * Created: Sun, 22 Nov 2020 20:21:16 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_kkj_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'kkj';
        $this->locale = 'kkj';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
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
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Pamba',
                      2 => 'Wanja',
                      3 => 'Mbiyɔ mɛndoŋgɔ',
                      4 => 'Nyɔlɔmbɔŋgɔ',
                      5 => 'Mɔnɔ ŋgbanja',
                      6 => 'Nyaŋgwɛ ŋgbanja',
                      7 => 'Kuŋgwɛ',
                      8 => 'Fɛ',
                      9 => 'Njapi',
                      10 => 'Nyukul',
                      11 => 'M11',
                      12 => 'ɓulɓusɛ',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Pamba',
                      2 => 'Wanja',
                      3 => 'Mbiyɔ mɛndoŋgɔ',
                      4 => 'Nyɔlɔmbɔŋgɔ',
                      5 => 'Mɔnɔ ŋgbanja',
                      6 => 'Nyaŋgwɛ ŋgbanja',
                      7 => 'Kuŋgwɛ',
                      8 => 'Fɛ',
                      9 => 'Njapi',
                      10 => 'Nyukul',
                      11 => 'M11',
                      12 => 'ɓulɓusɛ',
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
                      0 => 'Sɔndi',
                      1 => 'Lundi',
                      2 => 'Mardi',
                      3 => 'Mɛrkɛrɛdi',
                      4 => 'Yedi',
                      5 => 'Vaŋdɛrɛdi',
                      6 => 'Mɔnɔ sɔndi',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'So',
                      1 => 'Lu',
                      2 => 'Ma',
                      3 => 'Mɛ',
                      4 => 'Ye',
                      5 => 'Va',
                      6 => 'Ms',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Sɔndi',
                      1 => 'Lundi',
                      2 => 'Mardi',
                      3 => 'Mɛrkɛrɛdi',
                      4 => 'Yedi',
                      5 => 'Vaŋdɛrɛdi',
                      6 => 'Mɔnɔ sɔndi',
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
