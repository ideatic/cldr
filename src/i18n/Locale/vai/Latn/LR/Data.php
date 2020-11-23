<?php
declare(strict_types=1);

/**
 * Locale data for 'vai-Latn-LR'.
 * Created: Sun, 22 Nov 2020 20:22:00 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_vai_Latn_LR_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'vai';
        $this->locale = 'vai-Latn-LR';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'ꖨꖕꔞ',
                      2 => 'ꕒꕡ',
                      3 => 'ꕾꖺ',
                      4 => 'ꖢꖕ',
                      5 => 'ꖑꕱ',
                      6 => 'ꖱꘋ',
                      7 => 'ꖱꕞ',
                      8 => 'ꗛꔕ',
                      9 => 'ꕢꕌ',
                      10 => 'ꕭꖃ',
                      11 => 'ꔞꘋ',
                      12 => 'ꖨꖕꗏ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'ꖨꖕ ꕪꕴ ꔞꔀꕮꕊ',
                      2 => 'ꕒꕡꖝꖕ',
                      3 => 'ꕾꖺ',
                      4 => 'ꖢꖕ',
                      5 => 'ꖑꕱ',
                      6 => 'ꖱꘋ',
                      7 => 'ꖱꕞꔤ',
                      8 => 'ꗛꔕ',
                      9 => 'ꕢꕌ',
                      10 => 'ꕭꖃ',
                      11 => 'ꔞꘋꕔꕿ ꕸꖃꗏ',
                      12 => 'ꖨꖕ ꕪꕴ ꗏꖺꕮꕊ',
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
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Lahadi',
                      1 => 'Tɛɛnɛɛ',
                      2 => 'Talata',
                      3 => 'Alaba',
                      4 => 'Aimisa',
                      5 => 'Aijima',
                      6 => 'Siɓiti',
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
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Sun',
                      1 => 'Mon',
                      2 => 'Tue',
                      3 => 'Wed',
                      4 => 'Thu',
                      5 => 'Fri',
                      6 => 'Sat',
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