<?php
declare(strict_types=1);

/**
 * Locale data for 'vun'.
 * Created: Sun, 22 Nov 2020 20:22:00 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_vun_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'vun';
        $this->locale = 'vun';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'utuko';
        $this->pmString = 'kyiukonyi';
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
                      1 => 'Januari',
                      2 => 'Februari',
                      3 => 'Machi',
                      4 => 'Aprilyi',
                      5 => 'Mei',
                      6 => 'Junyi',
                      7 => 'Julyai',
                      8 => 'Agusti',
                      9 => 'Septemba',
                      10 => 'Oktoba',
                      11 => 'Novemba',
                      12 => 'Desemba',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'J',
                      1 => 'J',
                      2 => 'J',
                      3 => 'J',
                      4 => 'A',
                      5 => 'I',
                      6 => 'J',
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
                      0 => 'Jumapilyi',
                      1 => 'Jumatatuu',
                      2 => 'Jumanne',
                      3 => 'Jumatanu',
                      4 => 'Alhamisi',
                      5 => 'Ijumaa',
                      6 => 'Jumamosi',
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
