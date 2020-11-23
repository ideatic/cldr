<?php
declare(strict_types=1);

/**
 * Locale data for 'naq-NA'.
 * Created: Sun, 22 Nov 2020 20:21:33 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_naq_NA_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'naq';
        $this->locale = 'naq-NA';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'ǁgoagas';
        $this->pmString = 'ǃuias';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
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
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan',
                      2 => 'Feb',
                      3 => 'Mar',
                      4 => 'Apr',
                      5 => 'May',
                      6 => 'Jun',
                      7 => 'Jul',
                      8 => 'Aug',
                      9 => 'Sep',
                      10 => 'Oct',
                      11 => 'Nov',
                      12 => 'Dec',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'ǃKhanni',
                      2 => 'ǃKhanǀgôab',
                      3 => 'ǀKhuuǁkhâb',
                      4 => 'ǃHôaǂkhaib',
                      5 => 'ǃKhaitsâb',
                      6 => 'Gamaǀaeb',
                      7 => 'ǂKhoesaob',
                      8 => 'Aoǁkhuumûǁkhâb',
                      9 => 'Taraǀkhuumûǁkhâb',
                      10 => 'ǂNûǁnâiseb',
                      11 => 'ǀHooǂgaeb',
                      12 => 'Hôasoreǁkhâb',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'M',
                      2 => 'E',
                      3 => 'W',
                      4 => 'D',
                      5 => 'F',
                      6 => 'A',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Son',
                      1 => 'Ma',
                      2 => 'De',
                      3 => 'Wu',
                      4 => 'Do',
                      5 => 'Fr',
                      6 => 'Sat',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Sontaxtsees',
                      1 => 'Mantaxtsees',
                      2 => 'Denstaxtsees',
                      3 => 'Wunstaxtsees',
                      4 => 'Dondertaxtsees',
                      5 => 'Fraitaxtsees',
                      6 => 'Satertaxtsees',
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
