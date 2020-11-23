<?php
declare(strict_types=1);

/**
 * Locale data for 'mk-MK'.
 * Created: Sun, 22 Nov 2020 20:21:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_mk_MK_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'mk';
        $this->locale = 'mk-MK';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j.n.Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, \'во\' %time%';
        $this->amString = 'претпладне';
        $this->pmString = 'попладне';
        $this->nameEnglish = 'Macedonian (North Macedonia)';
        $this->nameNative = 'Македонски (Северна Македонија)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'јан.',
                      2 => 'фев.',
                      3 => 'мар.',
                      4 => 'апр.',
                      5 => 'мај',
                      6 => 'јун.',
                      7 => 'јул.',
                      8 => 'авг.',
                      9 => 'септ.',
                      10 => 'окт.',
                      11 => 'ноем.',
                      12 => 'дек.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ј',
                      2 => 'ф',
                      3 => 'м',
                      4 => 'а',
                      5 => 'м',
                      6 => 'ј',
                      7 => 'ј',
                      8 => 'а',
                      9 => 'с',
                      10 => 'о',
                      11 => 'н',
                      12 => 'д',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'јануари',
                      2 => 'февруари',
                      3 => 'март',
                      4 => 'април',
                      5 => 'мај',
                      6 => 'јуни',
                      7 => 'јули',
                      8 => 'август',
                      9 => 'септември',
                      10 => 'октомври',
                      11 => 'ноември',
                      12 => 'декември',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'нед.',
                      1 => 'пон.',
                      2 => 'вт.',
                      3 => 'сре.',
                      4 => 'чет.',
                      5 => 'пет.',
                      6 => 'саб.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'н',
                      1 => 'п',
                      2 => 'в',
                      3 => 'с',
                      4 => 'ч',
                      5 => 'п',
                      6 => 'с',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'недела',
                      1 => 'понеделник',
                      2 => 'вторник',
                      3 => 'среда',
                      4 => 'четврток',
                      5 => 'петок',
                      6 => 'сабота',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# година} other {# години}}',
              'month' => '{n, plural, one {# месец} other {# месеци}}',
              'week' => '{n, plural, one {# седмица} other {# седмици}}',
              'day' => '{n, plural, one {# ден} other {# дена}}',
              'hour' => '{n, plural, one {# ч.} other {# ч.}}',
              'minute' => '{n, plural, one {# мин.} other {# мин.}}',
              'second' => '{n, plural, one {# сек.} other {# сек.}}',
              'millisecond' => '{n, plural, one {# мс} other {# мс}}',
              'microsecond' => '{n, plural, one {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# нс} other {# нс}}',
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