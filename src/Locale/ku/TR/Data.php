<?php
declare(strict_types=1);

/**
 * Locale data for 'ku-TR'.
 * Created: Sun, 22 Nov 2020 20:21:20 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ku_TR_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'ku';
        $this->locale = 'ku-TR';
        $this->firstDayWeek = 1;
        $this->longDate = 'F j, Y';
        $this->shortDate = 'M j, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'BN';
        $this->pmString = 'PN';
        $this->nameEnglish = 'Kurdish (Turkey)';
        $this->nameNative = 'Kurdî (Tirkiye)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Rêb',
                      2 => 'Reş',
                      3 => 'Ada',
                      4 => 'Avr',
                      5 => 'Gul',
                      6 => 'Pûş',
                      7 => 'Tîr',
                      8 => 'Gel',
                      9 => 'Rez',
                      10 => 'Kew',
                      11 => 'Ser',
                      12 => 'Ber',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'R',
                      2 => 'R',
                      3 => 'A',
                      4 => 'A',
                      5 => 'G',
                      6 => 'P',
                      7 => 'T',
                      8 => 'G',
                      9 => 'R',
                      10 => 'K',
                      11 => 'S',
                      12 => 'B',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Rêbendanê',
                      2 => 'Reşemiyê',
                      3 => 'Adarê',
                      4 => 'Avrêlê',
                      5 => 'Gulanê',
                      6 => 'Pûşperê',
                      7 => 'Tîrmehê',
                      8 => 'Gelawêjê',
                      9 => 'Rezberê',
                      10 => 'Kewçêrê',
                      11 => 'Sermawezê',
                      12 => 'Berfanbarê',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Yş',
                      1 => 'Dş',
                      2 => 'Sş',
                      3 => 'çş',
                      4 => 'Pş',
                      5 => 'în',
                      6 => 'ş',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'Y',
                      1 => 'D',
                      2 => 'S',
                      3 => 'Ç',
                      4 => 'P',
                      5 => 'Î',
                      6 => 'Ş',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Yekşem',
                      1 => 'Duşem',
                      2 => 'Sêşem',
                      3 => 'çarşem',
                      4 => 'Pêncşem',
                      5 => 'în',
                      6 => 'şemî',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# sal} other {# sal}}',
              'month' => '{n, plural, one {# meh} other {# meh}}',
              'week' => '{n, plural, one {# hefte} other {# hefte}}',
              'day' => '{n, plural, one {# roj} other {# roj}}',
              'hour' => '{n, plural, one {# st} other {# st}}',
              'minute' => '{n, plural, one {# d} other {# d}}',
              'second' => '{n, plural, one {# s} other {# s}}',
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
