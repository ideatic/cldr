<?php
declare(strict_types=1);

/**
 * Locale data for 'kw'.
 * Created: Sun, 22 Nov 2020 20:21:20 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_kw_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'kw';
        $this->locale = 'kw';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'a.m.';
        $this->pmString = 'p.m.';
        $this->nameEnglish = 'Cornish';
        $this->nameNative = 'Kernewek';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Gen',
                      2 => 'Hwe',
                      3 => 'Meu',
                      4 => 'Ebr',
                      5 => 'Me',
                      6 => 'Met',
                      7 => 'Gor',
                      8 => 'Est',
                      9 => 'Gwn',
                      10 => 'Hed',
                      11 => 'Du',
                      12 => 'Kev',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Mis Genver',
                      2 => 'Mis Hwevrer',
                      3 => 'Mis Meurth',
                      4 => 'Mis Ebrel',
                      5 => 'Mis Me',
                      6 => 'Mis Metheven',
                      7 => 'Mis Gortheren',
                      8 => 'Mis Est',
                      9 => 'Mis Gwynngala',
                      10 => 'Mis Hedra',
                      11 => 'Mis Du',
                      12 => 'Mis Kevardhu',
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
                      0 => 'Sul',
                      1 => 'Lun',
                      2 => 'Mth',
                      3 => 'Mhr',
                      4 => 'Yow',
                      5 => 'Gwe',
                      6 => 'Sad',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Dy Sul',
                      1 => 'Dy Lun',
                      2 => 'Dy Meurth',
                      3 => 'Dy Merher',
                      4 => 'Dy Yow',
                      5 => 'Dy Gwener',
                      6 => 'Dy Sadorn',
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