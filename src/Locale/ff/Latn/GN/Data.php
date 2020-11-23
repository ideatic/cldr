<?php
declare(strict_types=1);

/**
 * Locale data for 'ff-Latn-GN'.
 * Created: Sun, 22 Nov 2020 20:20:51 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ff_Latn_GN_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ff';
        $this->locale = 'ff-Latn-GN';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'subaka';
        $this->pmString = 'kikiiɗe';
        $this->nameEnglish = 'Fulah';
        $this->nameNative = 'Pulaar';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'S',
                      2 => 'C',
                      3 => 'M',
                      4 => 'S',
                      5 => 'D',
                      6 => 'K',
                      7 => 'M',
                      8 => 'J',
                      9 => 'S',
                      10 => 'Y',
                      11 => 'J',
                      12 => 'B',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Sii',
                      2 => 'Col',
                      3 => 'Mbo',
                      4 => 'See',
                      5 => 'Duu',
                      6 => 'Kor',
                      7 => 'Mor',
                      8 => 'Juk',
                      9 => 'Slt',
                      10 => 'Yar',
                      11 => 'Jol',
                      12 => 'Bow',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Siilo',
                      2 => 'Colte',
                      3 => 'Mbooy',
                      4 => 'Seeɗto',
                      5 => 'Duujal',
                      6 => 'Korse',
                      7 => 'Morso',
                      8 => 'Juko',
                      9 => 'Siilto',
                      10 => 'Yarkomaa',
                      11 => 'Jolal',
                      12 => 'Bowte',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'A',
                      2 => 'M',
                      3 => 'N',
                      4 => 'N',
                      5 => 'M',
                      6 => 'H',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dew',
                      1 => 'Aaɓ',
                      2 => 'Maw',
                      3 => 'Nje',
                      4 => 'Naa',
                      5 => 'Mwd',
                      6 => 'Hbi',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Dewo',
                      1 => 'Aaɓnde',
                      2 => 'Mawbaare',
                      3 => 'Njeslaare',
                      4 => 'Naasaande',
                      5 => 'Mawnde',
                      6 => 'Hoore-biir',
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
