<?php
declare(strict_types=1);

/**
 * Locale data for 'mi-NZ'.
 * Created: Sun, 22 Nov 2020 20:21:27 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_mi_NZ_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'mi';
        $this->locale = 'mi-NZ';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Maori (New Zealand)';
        $this->nameNative = 'Te reo Māori (Aotearoa)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Kohi',
                      2 => 'Hui',
                      3 => 'Pou',
                      4 => 'Pae',
                      5 => 'Hara',
                      6 => 'Pipi',
                      7 => 'Hōngo',
                      8 => 'Here',
                      9 => 'Mahu',
                      10 => 'Nuku',
                      11 => 'Rangi',
                      12 => 'Haki',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'K',
                      2 => 'H',
                      3 => 'P',
                      4 => 'P',
                      5 => 'H',
                      6 => 'P',
                      7 => 'H',
                      8 => 'H',
                      9 => 'M',
                      10 => 'N',
                      11 => 'R',
                      12 => 'H',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Kohitātea',
                      2 => 'Huitanguru',
                      3 => 'Poutūterangi',
                      4 => 'Paengawhāwhā',
                      5 => 'Haratua',
                      6 => 'Pipiri',
                      7 => 'Hōngongoi',
                      8 => 'Hereturikōkā',
                      9 => 'Mahuru',
                      10 => 'Whiringa-ā-nuku',
                      11 => 'Whiringa-ā-rangi',
                      12 => 'Hakihea',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Tap',
                      1 => 'Hin',
                      2 => 'Tū',
                      3 => 'Apa',
                      4 => 'Par',
                      5 => 'Mer',
                      6 => 'Hor',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'T',
                      1 => 'H',
                      2 => 'T',
                      3 => 'A',
                      4 => 'P',
                      5 => 'M',
                      6 => 'H',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Rātapu',
                      1 => 'Rāhina',
                      2 => 'Rātū',
                      3 => 'Rāapa',
                      4 => 'Rāpare',
                      5 => 'Rāmere',
                      6 => 'Rāhoroi',
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
