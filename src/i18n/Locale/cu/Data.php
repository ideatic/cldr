<?php

declare(strict_types=1);

/**
 * Locale data for 'cu'.
 * Created: Fri, 01 May 2020 17:34:15 +0200
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_cu_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 37
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'cu';
        $this->locale = 'cu';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ДП';
        $this->pmString = 'ПП';
        $this->nameEnglish = 'Church Slavic';
        $this->nameNative = 'Церковнослове́нскїй';
    }

    public function months($type = i18n_Locale::TYPE_WIDE)
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'і҆аⷩ҇',
                    2  => 'феⷡ҇',
                    3  => 'маⷬ҇',
                    4  => 'а҆пⷬ҇',
                    5  => 'маꙵ',
                    6  => 'і҆ꙋⷩ҇',
                    7  => 'і҆ꙋⷧ҇',
                    8  => 'а҆́ѵⷢ҇',
                    9  => 'сеⷫ҇',
                    10 => 'ѻ҆кⷮ',
                    11 => 'ноеⷨ',
                    12 => 'деⷦ҇',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'І҆',
                    2  => 'Ф',
                    3  => 'М',
                    4  => 'А҆',
                    5  => 'М',
                    6  => 'І҆',
                    7  => 'І҆',
                    8  => 'А҆',
                    9  => 'С',
                    10 => 'Ѻ҆',
                    11 => 'Н',
                    12 => 'Д',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'і҆аннꙋа́рїа',
                    2  => 'феврꙋа́рїа',
                    3  => 'ма́рта',
                    4  => 'а҆прі́ллїа',
                    5  => 'ма́їа',
                    6  => 'і҆ꙋ́нїа',
                    7  => 'і҆ꙋ́лїа',
                    8  => 'а҆́ѵгꙋста',
                    9  => 'септе́мврїа',
                    10 => 'ѻ҆ктѡ́врїа',
                    11 => 'ное́мврїа',
                    12 => 'деке́мврїа',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE)
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'ндⷧ҇ѧ',
                    1 => 'пнⷣе',
                    2 => 'втоⷬ҇',
                    3 => 'срⷣе',
                    4 => 'чеⷦ҇',
                    5 => 'пѧⷦ҇',
                    6 => 'сꙋⷠ҇',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'Н',
                    1 => 'П',
                    2 => 'В',
                    3 => 'С',
                    4 => 'Ч',
                    5 => 'П',
                    6 => 'С',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'недѣ́лѧ',
                    1 => 'понедѣ́льникъ',
                    2 => 'вто́рникъ',
                    3 => 'среда̀',
                    4 => 'четверто́къ',
                    5 => 'пѧто́къ',
                    6 => 'сꙋббѡ́та',
                ];
        }
    }

    public function intervals()
    {
        return [
            'year'        => '{n, plural, one {# year} other {# years}}',
            'month'       => '{n, plural, one {# month} other {# months}}',
            'week'        => '{n, plural, one {# week} other {# weeks}}',
            'day'         => '{n, plural, one {# day} other {# days}}',
            'hour'        => '{n, plural, one {# hr} other {# hr}}',
            'minute'      => '{n, plural, one {# min} other {# min}}',
            'second'      => '{n, plural, one {# sec} other {# sec}}',
            'millisecond' => '{n, plural, one {# ms} other {# ms}}',
            'microsecond' => '{n, plural, one {# µs} other {# µs}}',
            'nanosecond'  => '{n, plural, one {# ns} other {# ns}}',
        ];
    }

    public function currencies()
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Currencies.php';
    }

    public function languages()
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Languages.php';
    }

    public function territories(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Territories.php';
    }
}