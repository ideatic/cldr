<?php
declare(strict_types=1);

/**
 * Locale data for 'mas-KE'.
 * Created: Sun, 22 Nov 2020 20:21:25 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_mas_KE_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'mas';
        $this->locale = 'mas-KE';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'Ɛnkakɛnyá';
        $this->pmString = 'Ɛndámâ';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Dal',
                      2 => 'Ará',
                      3 => 'Ɔɛn',
                      4 => 'Doy',
                      5 => 'Lép',
                      6 => 'Rok',
                      7 => 'Sás',
                      8 => 'Bɔ́r',
                      9 => 'Kús',
                      10 => 'Gís',
                      11 => 'Shʉ́',
                      12 => 'Ntʉ́',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Oladalʉ́',
                      2 => 'Arát',
                      3 => 'Ɔɛnɨ́ɔɨŋɔk',
                      4 => 'Olodoyíóríê inkókúâ',
                      5 => 'Oloilépūnyīē inkókúâ',
                      6 => 'Kújúɔrɔk',
                      7 => 'Mórusásin',
                      8 => 'Ɔlɔ́ɨ́bɔ́rárɛ',
                      9 => 'Kúshîn',
                      10 => 'Olgísan',
                      11 => 'Pʉshʉ́ka',
                      12 => 'Ntʉ́ŋʉ́s',
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
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => '2',
                      1 => '3',
                      2 => '4',
                      3 => '5',
                      4 => '6',
                      5 => '7',
                      6 => '1',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Jpi',
                      1 => 'Jtt',
                      2 => 'Jnn',
                      3 => 'Jtn',
                      4 => 'Alh',
                      5 => 'Iju',
                      6 => 'Jmo',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Jumapílí',
                      1 => 'Jumatátu',
                      2 => 'Jumane',
                      3 => 'Jumatánɔ',
                      4 => 'Alaámisi',
                      5 => 'Jumáa',
                      6 => 'Jumamósi',
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
