<?php

declare(strict_types=1);

/**
 * Locale data for 'mer-KE'.
 * Created: Tue, 01 Nov 2022 12:00:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_mer_KE_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'mer';
        $this->locale = 'mer-KE';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'RŨ';
        $this->pmString = 'ŨG';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'J',
                    2  => 'F',
                    3  => 'M',
                    4  => 'Ĩ',
                    5  => 'M',
                    6  => 'N',
                    7  => 'N',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'JAN',
                    2  => 'FEB',
                    3  => 'MAC',
                    4  => 'ĨPU',
                    5  => 'MĨĨ',
                    6  => 'NJU',
                    7  => 'NJR',
                    8  => 'AGA',
                    9  => 'SPT',
                    10 => 'OKT',
                    11 => 'NOV',
                    12 => 'DEC',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Januarĩ',
                    2  => 'Feburuarĩ',
                    3  => 'Machi',
                    4  => 'Ĩpurũ',
                    5  => 'Mĩĩ',
                    6  => 'Njuni',
                    7  => 'Njuraĩ',
                    8  => 'Agasti',
                    9  => 'Septemba',
                    10 => 'Oktũba',
                    11 => 'Novemba',
                    12 => 'Dicemba',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'K',
                    1 => 'M',
                    2 => 'W',
                    3 => 'W',
                    4 => 'W',
                    5 => 'W',
                    6 => 'J',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'KIU',
                    1 => 'MRA',
                    2 => 'WAI',
                    3 => 'WET',
                    4 => 'WEN',
                    5 => 'WTN',
                    6 => 'JUM',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Kiumia',
                    1 => 'Muramuko',
                    2 => 'Wairi',
                    3 => 'Wethatu',
                    4 => 'Wena',
                    5 => 'Wetano',
                    6 => 'Jumamosi',
                ];
        }
    }

    public function intervals(): array
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
            'microsecond' => '{n, plural, one {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, one {# ns} other {# ns}}',
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
