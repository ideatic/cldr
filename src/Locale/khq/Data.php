<?php
declare(strict_types=1);

/**
 * Locale data for 'khq'.
 * Created: Sun, 22 Nov 2020 20:21:15 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_khq_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'khq';
        $this->locale = 'khq';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'Adduha';
        $this->pmString = 'Aluula';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'Ž',
                      2 => 'F',
                      3 => 'M',
                      4 => 'A',
                      5 => 'M',
                      6 => 'Ž',
                      7 => 'Ž',
                      8 => 'U',
                      9 => 'S',
                      10 => 'O',
                      11 => 'N',
                      12 => 'D',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Žan',
                      2 => 'Fee',
                      3 => 'Mar',
                      4 => 'Awi',
                      5 => 'Me',
                      6 => 'Žuw',
                      7 => 'Žuy',
                      8 => 'Ut',
                      9 => 'Sek',
                      10 => 'Okt',
                      11 => 'Noo',
                      12 => 'Dee',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Žanwiye',
                      2 => 'Feewiriye',
                      3 => 'Marsi',
                      4 => 'Awiril',
                      5 => 'Me',
                      6 => 'Žuweŋ',
                      7 => 'Žuyye',
                      8 => 'Ut',
                      9 => 'Sektanbur',
                      10 => 'Oktoobur',
                      11 => 'Noowanbur',
                      12 => 'Deesanbur',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'H',
                      1 => 'T',
                      2 => 'T',
                      3 => 'L',
                      4 => 'L',
                      5 => 'L',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Alh',
                      1 => 'Ati',
                      2 => 'Ata',
                      3 => 'Ala',
                      4 => 'Alm',
                      5 => 'Alj',
                      6 => 'Ass',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Alhadi',
                      1 => 'Atini',
                      2 => 'Atalata',
                      3 => 'Alarba',
                      4 => 'Alhamiisa',
                      5 => 'Aljuma',
                      6 => 'Assabdu',
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
