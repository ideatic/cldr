<?php
declare(strict_types=1);

/**
 * Locale data for 'uk-UA'.
 * Created: Sun, 22 Nov 2020 20:21:58 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_uk_UA_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'uk';
        $this->locale = 'uk-UA';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y р.';
        $this->shortDate = 'j M Y р.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'дп';
        $this->pmString = 'пп';
        $this->nameEnglish = 'Ukrainian (Ukraine)';
        $this->nameNative = 'Українська (Україна)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'січ.',
                      2 => 'лют.',
                      3 => 'бер.',
                      4 => 'квіт.',
                      5 => 'трав.',
                      6 => 'черв.',
                      7 => 'лип.',
                      8 => 'серп.',
                      9 => 'вер.',
                      10 => 'жовт.',
                      11 => 'лист.',
                      12 => 'груд.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'с',
                      2 => 'л',
                      3 => 'б',
                      4 => 'к',
                      5 => 'т',
                      6 => 'ч',
                      7 => 'л',
                      8 => 'с',
                      9 => 'в',
                      10 => 'ж',
                      11 => 'л',
                      12 => 'г',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'січня',
                      2 => 'лютого',
                      3 => 'березня',
                      4 => 'квітня',
                      5 => 'травня',
                      6 => 'червня',
                      7 => 'липня',
                      8 => 'серпня',
                      9 => 'вересня',
                      10 => 'жовтня',
                      11 => 'листопада',
                      12 => 'грудня',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'нд',
                      1 => 'пн',
                      2 => 'вт',
                      3 => 'ср',
                      4 => 'чт',
                      5 => 'пт',
                      6 => 'сб',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'Н',
                      1 => 'П',
                      2 => 'В',
                      3 => 'С',
                      4 => 'Ч',
                      5 => 'П',
                      6 => 'С',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'неділя',
                      1 => 'понеділок',
                      2 => 'вівторок',
                      3 => 'середа',
                      4 => 'четвер',
                      5 => 'пʼятниця',
                      6 => 'субота',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# рік} few {# роки} many {# років} other {# року}}',
              'month' => '{n, plural, one {# місяць} few {# місяці} many {# місяців} other {# місяця}}',
              'week' => '{n, plural, one {# тиждень} few {# тижні} many {# тижнів} other {# тижня}}',
              'day' => '{n, plural, one {# день} few {# дні} many {# днів} other {# дня}}',
              'hour' => '{n, plural, one {# год} few {# год} many {# год} other {# год}}',
              'minute' => '{n, plural, one {# хв} few {# хв} many {# хв} other {# хв}}',
              'second' => '{n, plural, one {# с} few {# с} many {# с} other {# с}}',
              'millisecond' => '{n, plural, one {# мс} few {# мс} many {# мс} other {# мс}}',
              'microsecond' => '{n, plural, one {# мкс} few {# мкс} many {# мкс} other {# мкс}}',
              'nanosecond' => '{n, plural, one {# нс} few {# нс} many {# нс} other {# нс}}',
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
