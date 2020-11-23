<?php
declare(strict_types=1);

/**
 * Locale data for 'kde'.
 * Created: Sun, 22 Nov 2020 20:21:15 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_kde_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'kde';
        $this->locale = 'kde';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'Muhi';
        $this->pmString = 'Chilo';
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
                      3 => 'Mac',
                      4 => 'Apr',
                      5 => 'Mei',
                      6 => 'Jun',
                      7 => 'Jul',
                      8 => 'Ago',
                      9 => 'Sep',
                      10 => 'Okt',
                      11 => 'Nov',
                      12 => 'Des',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Mwedi Ntandi',
                      2 => 'Mwedi wa Pili',
                      3 => 'Mwedi wa Tatu',
                      4 => 'Mwedi wa Nchechi',
                      5 => 'Mwedi wa Nnyano',
                      6 => 'Mwedi wa Nnyano na Umo',
                      7 => 'Mwedi wa Nnyano na Mivili',
                      8 => 'Mwedi wa Nnyano na Mitatu',
                      9 => 'Mwedi wa Nnyano na Nchechi',
                      10 => 'Mwedi wa Nnyano na Nnyano',
                      11 => 'Mwedi wa Nnyano na Nnyano na U',
                      12 => 'Mwedi wa Nnyano na Nnyano na M',
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
                      0 => 'Ll2',
                      1 => 'Ll3',
                      2 => 'Ll4',
                      3 => 'Ll5',
                      4 => 'Ll6',
                      5 => 'Ll7',
                      6 => 'Ll1',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Liduva lyapili',
                      1 => 'Liduva lyatatu',
                      2 => 'Liduva lyanchechi',
                      3 => 'Liduva lyannyano',
                      4 => 'Liduva lyannyano na linji',
                      5 => 'Liduva lyannyano na mavili',
                      6 => 'Liduva litandi',
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