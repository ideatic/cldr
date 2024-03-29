<?php

declare(strict_types=1);

/**
 * Locale data for 'be-BY'.
 * Created: Tue, 01 Nov 2022 12:00:18 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_be_BY_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'be';
        $this->locale = 'be-BY';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F Y г.';
        $this->shortDate = 'j M Y г.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Belarusian (Belarus)';
        $this->nameNative = 'Беларуская (Беларусь)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'сту',
                    2  => 'лют',
                    3  => 'сак',
                    4  => 'кра',
                    5  => 'мая',
                    6  => 'чэр',
                    7  => 'ліп',
                    8  => 'жні',
                    9  => 'вер',
                    10 => 'кас',
                    11 => 'ліс',
                    12 => 'сне',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'с',
                    2  => 'л',
                    3  => 'с',
                    4  => 'к',
                    5  => 'м',
                    6  => 'ч',
                    7  => 'л',
                    8  => 'ж',
                    9  => 'в',
                    10 => 'к',
                    11 => 'л',
                    12 => 'с',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'студзеня',
                    2  => 'лютага',
                    3  => 'сакавіка',
                    4  => 'красавіка',
                    5  => 'мая',
                    6  => 'чэрвеня',
                    7  => 'ліпеня',
                    8  => 'жніўня',
                    9  => 'верасня',
                    10 => 'кастрычніка',
                    11 => 'лістапада',
                    12 => 'снежня',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'нд',
                    1 => 'пн',
                    2 => 'аў',
                    3 => 'ср',
                    4 => 'чц',
                    5 => 'пт',
                    6 => 'сб',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'н',
                    1 => 'п',
                    2 => 'а',
                    3 => 'с',
                    4 => 'ч',
                    5 => 'п',
                    6 => 'с',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'нядзеля',
                    1 => 'панядзелак',
                    2 => 'аўторак',
                    3 => 'серада',
                    4 => 'чацвер',
                    5 => 'пятніца',
                    6 => 'субота',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# год} few {# гады} many {# гадоў} other {# года}}',
            'month'       => '{n, plural, one {# месяц} few {# месяца} many {# месяцаў} other {# месяца}}',
            'week'        => '{n, plural, one {# тыдзень} few {# тыдні} many {# тыдняў} other {# тыдня}}',
            'day'         => '{n, plural, one {# суткі} few {# сутак} many {# сутак} other {# сутак}}',
            'hour'        => '{n, plural, one {# гадз} few {# гадз} many {# гадз} other {# гадз}}',
            'minute'      => '{n, plural, one {# хв} few {# хв} many {# хв} other {# хв}}',
            'second'      => '{n, plural, one {# с} few {# с} many {# с} other {# с}}',
            'millisecond' => '{n, plural, one {# мс} few {# мс} many {# мс} other {# мс}}',
            'microsecond' => '{n, plural, one {# мкс} few {# мкс} many {# мкс} other {# мкс}}',
            'nanosecond'  => '{n, plural, one {# нс} few {# нс} many {# нс} other {# нс}}',
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
