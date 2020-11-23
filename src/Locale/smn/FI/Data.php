<?php
declare(strict_types=1);

/**
 * Locale data for 'smn-FI'.
 * Created: Sun, 22 Nov 2020 20:21:51 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_smn_FI_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'smn';
        $this->locale = 'smn-FI';
        $this->firstDayWeek = 1;
        $this->longDate = 'F j. Y';
        $this->shortDate = 'M j. Y';
        $this->longTime = 'G.i.s';
        $this->shortTime = 'G.i';
        $this->dateTime = '%date% \'tme\' %time%';
        $this->amString = 'ip.';
        $this->pmString = 'ep.';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Uđiv',
                      2 => 'Kuovâ',
                      3 => 'Njuhčâ',
                      4 => 'Cuáŋui',
                      5 => 'Vyesi',
                      6 => 'Kesi',
                      7 => 'Syeini',
                      8 => 'Porge',
                      9 => 'čohčâ',
                      10 => 'Roovvâd',
                      11 => 'Skammâ',
                      12 => 'Juovlâ',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'U',
                      2 => 'K',
                      3 => 'NJ',
                      4 => 'C',
                      5 => 'V',
                      6 => 'K',
                      7 => 'S',
                      8 => 'P',
                      9 => 'Č',
                      10 => 'R',
                      11 => 'S',
                      12 => 'J',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Uđđâivemáánu',
                      2 => 'Kuovâmáánu',
                      3 => 'Njuhčâmáánu',
                      4 => 'Cuáŋuimáánu',
                      5 => 'Vyesimáánu',
                      6 => 'Kesimáánu',
                      7 => 'Syeinimáánu',
                      8 => 'Porgemáánu',
                      9 => 'čohčâmáánu',
                      10 => 'Roovvâdmáánu',
                      11 => 'Skammâmáánu',
                      12 => 'Juovlâmáánu',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Pas',
                      1 => 'Vuo',
                      2 => 'Maj',
                      3 => 'Kos',
                      4 => 'Tuo',
                      5 => 'Vás',
                      6 => 'Láv',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'P',
                      1 => 'V',
                      2 => 'M',
                      3 => 'K',
                      4 => 'T',
                      5 => 'V',
                      6 => 'L',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Pasepeeivi',
                      1 => 'Vuossaargâ',
                      2 => 'Majebaargâ',
                      3 => 'Koskoho',
                      4 => 'Tuorâstuv',
                      5 => 'Vástuppeeivi',
                      6 => 'Lávurduv',
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
