<?php

declare(strict_types=1);

/**
 * Locale data for 'ce-RU'.
 * Created: Sun, 22 Nov 2020 20:20:31 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ce_RU_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'ce';
        $this->locale = 'ce-RU';
        $this->firstDayWeek = 1;
        $this->longDate = 'F j, Y';
        $this->shortDate = 'M j, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Chechen (Russia)';
        $this->nameNative = 'Нохчийн (Росси)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'Я',
                    2  => 'Ф',
                    3  => 'М',
                    4  => 'А',
                    5  => 'М',
                    6  => 'И',
                    7  => 'И',
                    8  => 'А',
                    9  => 'С',
                    10 => 'О',
                    11 => 'Н',
                    12 => 'Д',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'январь',
                    2  => 'февраль',
                    3  => 'март',
                    4  => 'апрель',
                    5  => 'май',
                    6  => 'июнь',
                    7  => 'июль',
                    8  => 'август',
                    9  => 'сентябрь',
                    10 => 'октябрь',
                    11 => 'ноябрь',
                    12 => 'декабрь',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'янв',
                    2  => 'фев',
                    3  => 'мар',
                    4  => 'апр',
                    5  => 'май',
                    6  => 'июн',
                    7  => 'июл',
                    8  => 'авг',
                    9  => 'сен',
                    10 => 'окт',
                    11 => 'ноя',
                    12 => 'дек',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'кӀи',
                    1 => 'ор',
                    2 => 'ши',
                    3 => 'кха',
                    4 => 'еа',
                    5 => 'пӀе',
                    6 => 'шуо',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'кӀи',
                    1 => 'ор',
                    2 => 'ши',
                    3 => 'кха',
                    4 => 'еа',
                    5 => 'пӀе',
                    6 => 'шуо',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'кӀира',
                    1 => 'оршот',
                    2 => 'шинара',
                    3 => 'кхаара',
                    4 => 'еара',
                    5 => 'пӀераска',
                    6 => 'шуот',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# шо} other {# шо}}',
            'month'       => '{n, plural, one {# бутт} other {# бутт}}',
            'week'        => '{n, plural, one {# кӀира} other {# кӀира}}',
            'day'         => '{n, plural, one {# де} other {# де}}',
            'hour'        => '{n, plural, one {# сахь.} other {# сахь.}}',
            'minute'      => '{n, plural, one {# мин} other {# мин}}',
            'second'      => '{n, plural, one {# сек} other {# сек}}',
            'millisecond' => '{n, plural, one {# мс} other {# мс}}',
            'microsecond' => '{n, plural, one {# мкс} other {# мкс}}',
            'nanosecond'  => '{n, plural, one {# нс} other {# нс}}',
        ];
    }

    public function currencies(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Currencies.php';
    }

    public function languages(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Languages.php';
    }

    public function territories(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Territories.php';
    }
}
