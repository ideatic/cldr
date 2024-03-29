<?php

declare(strict_types=1);

/**
 * Locale data for 'teo-KE'.
 * Created: Tue, 01 Nov 2022 12:00:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_teo_KE_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'teo';
        $this->locale = 'teo-KE';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'Taparachu';
        $this->pmString = 'Ebongi';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'R',
                    2  => 'M',
                    3  => 'K',
                    4  => 'D',
                    5  => 'M',
                    6  => 'M',
                    7  => 'J',
                    8  => 'P',
                    9  => 'S',
                    10 => 'T',
                    11 => 'L',
                    12 => 'P',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Rar',
                    2  => 'Muk',
                    3  => 'Kwa',
                    4  => 'Dun',
                    5  => 'Mar',
                    6  => 'Mod',
                    7  => 'Jol',
                    8  => 'Ped',
                    9  => 'Sok',
                    10 => 'Tib',
                    11 => 'Lab',
                    12 => 'Poo',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Orara',
                    2  => 'Omuk',
                    3  => 'Okwamg’',
                    4  => 'Odung’el',
                    5  => 'Omaruk',
                    6  => 'Omodok’king’ol',
                    7  => 'Ojola',
                    8  => 'Opedel',
                    9  => 'Osokosokoma',
                    10 => 'Otibar',
                    11 => 'Olabor',
                    12 => 'Opoo',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'J',
                    1 => 'B',
                    2 => 'A',
                    3 => 'U',
                    4 => 'U',
                    5 => 'K',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Jum',
                    1 => 'Bar',
                    2 => 'Aar',
                    3 => 'Uni',
                    4 => 'Ung',
                    5 => 'Kan',
                    6 => 'Sab',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Nakaejuma',
                    1 => 'Nakaebarasa',
                    2 => 'Nakaare',
                    3 => 'Nakauni',
                    4 => 'Nakaung’on',
                    5 => 'Nakakany',
                    6 => 'Nakasabiti',
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
