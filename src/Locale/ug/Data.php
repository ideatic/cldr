<?php
declare(strict_types=1);

/**
 * Locale data for 'ug'.
 * Created: Sun, 22 Nov 2020 20:21:58 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ug_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ug';
        $this->locale = 'ug';
        $this->firstDayWeek = 1;
        $this->longDate = 'j-F، Y';
        $this->shortDate = 'j-M، Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%، %time%';
        $this->amString = 'چۈشتىن بۇرۇن';
        $this->pmString = 'چۈشتىن كېيىن';
        $this->nameEnglish = 'Uighur';
        $this->nameNative = 'ئۇيغۇرچە';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'يانۋار',
                      2 => 'فېۋرال',
                      3 => 'مارت',
                      4 => 'ئاپرېل',
                      5 => 'ماي',
                      6 => 'ئىيۇن',
                      7 => 'ئىيۇل',
                      8 => 'ئاۋغۇست',
                      9 => 'سېنتەبىر',
                      10 => 'ئۆكتەبىر',
                      11 => 'نويابىر',
                      12 => 'دېكابىر',
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
                      1 => 'يانۋار',
                      2 => 'فېۋرال',
                      3 => 'مارت',
                      4 => 'ئاپرېل',
                      5 => 'ماي',
                      6 => 'ئىيۇن',
                      7 => 'ئىيۇل',
                      8 => 'ئاۋغۇست',
                      9 => 'سېنتەبىر',
                      10 => 'ئۆكتەبىر',
                      11 => 'نويابىر',
                      12 => 'دېكابىر',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'يە',
                      1 => 'دۈ',
                      2 => 'سە',
                      3 => 'چا',
                      4 => 'پە',
                      5 => 'جۈ',
                      6 => 'شە',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'ي',
                      1 => 'د',
                      2 => 'س',
                      3 => 'چ',
                      4 => 'پ',
                      5 => 'ج',
                      6 => 'ش',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'يەكشەنبە',
                      1 => 'دۈشەنبە',
                      2 => 'سەيشەنبە',
                      3 => 'چارشەنبە',
                      4 => 'پەيشەنبە',
                      5 => 'جۈمە',
                      6 => 'شەنبە',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# يىل} other {# يىل}}',
              'month' => '{n, plural, one {# ئاي} other {# ئاي}}',
              'week' => '{n, plural, one {# ھەپتە} other {# ھەپتە}}',
              'day' => '{n, plural, one {# كۈن} other {# كۈن}}',
              'hour' => '{n, plural, one {# سائەت} other {# سائەت}}',
              'minute' => '{n, plural, one {# مىنۇت} other {# مىنۇت}}',
              'second' => '{n, plural, one {# سېكۇنت} other {# سېكۇنت}}',
              'millisecond' => '{n, plural, one {# مىللىسېكۇنت} other {# مىللىسېكۇنت}}',
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
