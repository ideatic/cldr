<?php
declare(strict_types=1);

/**
 * Locale data for 'ru-RU'.
 * Created: Sun, 22 Nov 2020 20:21:46 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ru_RU_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'ru';
        $this->locale = 'ru-RU';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y г.';
        $this->shortDate = 'j M Y г.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Russian (Russia)';
        $this->nameNative = 'Русский (Россия)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'янв.',
                      2 => 'февр.',
                      3 => 'мар.',
                      4 => 'апр.',
                      5 => 'мая',
                      6 => 'июн.',
                      7 => 'июл.',
                      8 => 'авг.',
                      9 => 'сент.',
                      10 => 'окт.',
                      11 => 'нояб.',
                      12 => 'дек.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'Я',
                      2 => 'Ф',
                      3 => 'М',
                      4 => 'А',
                      5 => 'М',
                      6 => 'И',
                      7 => 'И',
                      8 => 'А',
                      9 => 'С',
                      10 => 'О',
                      11 => 'Н',
                      12 => 'Д',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'января',
                      2 => 'февраля',
                      3 => 'марта',
                      4 => 'апреля',
                      5 => 'мая',
                      6 => 'июня',
                      7 => 'июля',
                      8 => 'августа',
                      9 => 'сентября',
                      10 => 'октября',
                      11 => 'ноября',
                      12 => 'декабря',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'вс',
                      1 => 'пн',
                      2 => 'вт',
                      3 => 'ср',
                      4 => 'чт',
                      5 => 'пт',
                      6 => 'сб',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'вс',
                      1 => 'пн',
                      2 => 'вт',
                      3 => 'ср',
                      4 => 'чт',
                      5 => 'пт',
                      6 => 'сб',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'воскресенье',
                      1 => 'понедельник',
                      2 => 'вторник',
                      3 => 'среда',
                      4 => 'четверг',
                      5 => 'пятница',
                      6 => 'суббота',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# год} one {# год} one {# году} one {# года} one {# годом} one {# годе} one {# годе} one {# год} few {# года} few {# года} few {# годам} few {# лет} few {# годами} few {# годах} few {# годах} few {# года} many {# лет} many {# лет} many {# годам} many {# лет} many {# годами} many {# годах} many {# годах} many {# лет} other {# года} other {# года} other {# года} other {# года} other {# года} other {# года} other {# года}}',
              'month' => '{n, plural, one {# месяц} one {# месяц} one {# месяцу} one {# месяца} one {# месяцем} one {# месяце} one {# месяце} one {# месяц} few {# месяца} few {# месяца} few {# месяцам} few {# месяцев} few {# месяцами} few {# месяцах} few {# месяцах} few {# месяца} many {# месяцев} many {# месяцев} many {# месяцам} many {# месяцев} many {# месяцами} many {# месяцах} many {# месяцах} many {# месяцев} other {# месяца} other {# месяца} other {# месяца} other {# месяца} other {# месяца} other {# месяца} other {# месяца}}',
              'week' => '{n, plural, one {# неделя} one {# неделю} one {# неделе} one {# недели} one {# неделей} one {# неделе} one {# неделе} one {# неделя} few {# недели} few {# недели} few {# неделям} few {# недель} few {# неделями} few {# неделях} few {# неделях} few {# недели} many {# недель} many {# недель} many {# неделям} many {# недель} many {# неделями} many {# неделях} many {# неделях} many {# недель} other {# недели} other {# недели} other {# недели} other {# недели} other {# недели} other {# недели} other {# недели}}',
              'day' => '{n, plural, one {# день} one {# день} one {# дню} one {# дня} one {# днём} one {# дне} one {# дне} one {# день} few {# дня} few {# дня} few {# дням} few {# дней} few {# днями} few {# днях} few {# днях} few {# дня} many {# дней} many {# дней} many {# дням} many {# дней} many {# днями} many {# днях} many {# днях} many {# дней} other {# дня} other {# дня} other {# дня} other {# дня} other {# дня} other {# дня} other {# дня}}',
              'hour' => '{n, plural, one {# ч} few {# ч} many {# ч} other {# ч}}',
              'minute' => '{n, plural, one {# мин} few {# мин} many {# мин} other {# мин}}',
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
