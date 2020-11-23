<?php
declare(strict_types=1);

/**
 * Locale data for 'bs-Cyrl-BA'.
 * Created: Sun, 22 Nov 2020 20:20:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_bs_Cyrl_BA_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'bs';
        $this->locale = 'bs-Cyrl-BA';
        $this->firstDayWeek = 1;
        $this->longDate = 'd. F Y.';
        $this->shortDate = 'd.m.Y.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'прије подне';
        $this->pmString = 'послије подне';
        $this->nameEnglish = 'Bosnian';
        $this->nameNative = 'Bosanski';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'јан',
                      2 => 'феб',
                      3 => 'мар',
                      4 => 'апр',
                      5 => 'мај',
                      6 => 'јун',
                      7 => 'јул',
                      8 => 'ауг',
                      9 => 'сеп',
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
                      6 => 'јуни',
                      7 => 'јули',
                      8 => 'аугуст',
                      9 => 'септембар',
                      10 => 'октобар',
                      11 => 'новембар',
                      12 => 'децембар',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
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
                      0 => 'недјеља',
                      1 => 'понедјељак',
                      2 => 'уторак',
                      3 => 'сриједа',
                      4 => 'четвртак',
                      5 => 'петак',
                      6 => 'субота',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'нед',
                      1 => 'пон',
                      2 => 'уто',
                      3 => 'сри',
                      4 => 'чет',
                      5 => 'пет',
                      6 => 'суб',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# година} few {# године} other {# година}}',
              'month' => '{n, plural, one {# мјесец} few {# мјесеца} other {# мјесеци}}',
              'week' => '{n, plural, one {# седмица} few {# седмице} other {# седмица}}',
              'day' => '{n, plural, one {# дан} few {# дана} other {# дана}}',
              'hour' => '{n, plural, one {# сат} few {# сата} other {# сати}}',
              'minute' => '{n, plural, one {# мин.} few {# мин.} other {# мин.}}',
              'second' => '{n, plural, one {# сек.} few {# сек.} other {# сек.}}',
              'millisecond' => '{n, plural, one {# мс} few {# мс} other {# мс}}',
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