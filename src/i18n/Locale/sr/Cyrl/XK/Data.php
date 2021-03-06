<?php
declare(strict_types=1);

/**
 * Locale data for 'sr-Cyrl-XK'.
 * Created: Sun, 22 Nov 2020 20:21:53 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sr_Cyrl_XK_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'sr';
        $this->locale = 'sr-Cyrl-XK';
        $this->firstDayWeek = 1;
        $this->longDate = 'd. F Y.';
        $this->shortDate = 'd.m.Y.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'пре подне';
        $this->pmString = 'по подне';
        $this->nameEnglish = 'Serbian';
        $this->nameNative = 'Српски';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'јан',
                      2 => 'феб',
                      3 => 'март',
                      4 => 'апр',
                      5 => 'мај',
                      6 => 'јун',
                      7 => 'јул',
                      8 => 'авг',
                      9 => 'септ',
                      10 => 'окт',
                      11 => 'нов',
                      12 => 'дец',
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
                      1 => 'јануар',
                      2 => 'фебруар',
                      3 => 'март',
                      4 => 'април',
                      5 => 'мај',
                      6 => 'јун',
                      7 => 'јул',
                      8 => 'август',
                      9 => 'септембар',
                      10 => 'октобар',
                      11 => 'новембар',
                      12 => 'децембар',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'нед',
                      1 => 'пон',
                      2 => 'уто',
                      3 => 'сре',
                      4 => 'чет',
                      5 => 'пет',
                      6 => 'суб',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'н',
                      1 => 'п',
                      2 => 'у',
                      3 => 'с',
                      4 => 'ч',
                      5 => 'п',
                      6 => 'с',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'недеља',
                      1 => 'понедељак',
                      2 => 'уторак',
                      3 => 'среда',
                      4 => 'четвртак',
                      5 => 'петак',
                      6 => 'субота',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# година} few {# године} other {# година}}',
              'month' => '{n, plural, one {# месец} few {# месеца} other {# месеци}}',
              'week' => '{n, plural, one {# недеља} few {# недеље} other {# недеља}}',
              'day' => '{n, plural, one {# дан} few {# дана} other {# дана}}',
              'hour' => '{n, plural, one {# сат} few {# сата} other {# сати}}',
              'minute' => '{n, plural, one {# мин} few {# мин} other {# мин}}',
              'second' => '{n, plural, one {# сек} few {# сек} other {# сек}}',
              'millisecond' => '{n, plural, one {# ms} few {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {# μs} few {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# ns} few {# ns} other {# ns}}',
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
