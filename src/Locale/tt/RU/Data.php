<?php
declare(strict_types=1);

/**
 * Locale data for 'tt-RU'.
 * Created: Sun, 22 Nov 2020 20:21:58 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_tt_RU_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'tt';
        $this->locale = 'tt-RU';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F, Y ел';
        $this->shortDate = 'j M, Y ел';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Tatar (Russia)';
        $this->nameNative = 'Татар (Россия)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'гыйн.',
                      2 => 'фев.',
                      3 => 'мар.',
                      4 => 'апр.',
                      5 => 'май',
                      6 => 'июнь',
                      7 => 'июль',
                      8 => 'авг.',
                      9 => 'сент.',
                      10 => 'окт.',
                      11 => 'нояб.',
                      12 => 'дек.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => '1',
                      2 => '2',
                      3 => '3',
                      4 => '4',
                      5 => '5',
                      6 => '6',
                      7 => '7',
                      8 => '8',
                      9 => '9',
                      10 => '10',
                      11 => '11',
                      12 => '12',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'гыйнвар',
                      2 => 'февраль',
                      3 => 'март',
                      4 => 'апрель',
                      5 => 'май',
                      6 => 'июнь',
                      7 => 'июль',
                      8 => 'август',
                      9 => 'сентябрь',
                      10 => 'октябрь',
                      11 => 'ноябрь',
                      12 => 'декабрь',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'якш.',
                      1 => 'дүш.',
                      2 => 'сиш.',
                      3 => 'чәр.',
                      4 => 'пәнҗ.',
                      5 => 'җом.',
                      6 => 'шим.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'Я',
                      1 => 'Д',
                      2 => 'С',
                      3 => 'Ч',
                      4 => 'П',
                      5 => 'Җ',
                      6 => 'Ш',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'якшәмбе',
                      1 => 'дүшәмбе',
                      2 => 'сишәмбе',
                      3 => 'чәршәмбе',
                      4 => 'пәнҗешәмбе',
                      5 => 'җомга',
                      6 => 'шимбә',
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
