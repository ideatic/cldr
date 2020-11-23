<?php
declare(strict_types=1);

/**
 * Locale data for 'dyo-SN'.
 * Created: Sun, 22 Nov 2020 20:20:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_dyo_SN_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'dyo';
        $this->locale = 'dyo-SN';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'S',
                      2 => 'F',
                      3 => 'M',
                      4 => 'A',
                      5 => 'M',
                      6 => 'S',
                      7 => 'S',
                      8 => 'U',
                      9 => 'S',
                      10 => 'O',
                      11 => 'N',
                      12 => 'D',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Sa',
                      2 => 'Fe',
                      3 => 'Ma',
                      4 => 'Ab',
                      5 => 'Me',
                      6 => 'Su',
                      7 => 'Sú',
                      8 => 'Ut',
                      9 => 'Se',
                      10 => 'Ok',
                      11 => 'No',
                      12 => 'De',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Sanvie',
                      2 => 'Fébirie',
                      3 => 'Mars',
                      4 => 'Aburil',
                      5 => 'Mee',
                      6 => 'Sueŋ',
                      7 => 'Súuyee',
                      8 => 'Ut',
                      9 => 'Settembar',
                      10 => 'Oktobar',
                      11 => 'Novembar',
                      12 => 'Disambar',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'T',
                      2 => 'T',
                      3 => 'A',
                      4 => 'A',
                      5 => 'A',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dim',
                      1 => 'Ten',
                      2 => 'Tal',
                      3 => 'Ala',
                      4 => 'Ara',
                      5 => 'Arj',
                      6 => 'Sib',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Dimas',
                      1 => 'Teneŋ',
                      2 => 'Talata',
                      3 => 'Alarbay',
                      4 => 'Aramisay',
                      5 => 'Arjuma',
                      6 => 'Sibiti',
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