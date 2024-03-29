<?php

declare(strict_types=1);

/**
 * Locale data for 'sg-CF'.
 * Created: Tue, 01 Nov 2022 12:00:32 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sg_CF_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'sg';
        $this->locale = 'sg-CF';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'ND';
        $this->pmString = 'LK';
        $this->nameEnglish = 'Sango (Central African Republic)';
        $this->nameNative = 'Sängö (Ködörösêse tî Bêafrîka)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'N',
                    2  => 'F',
                    3  => 'M',
                    4  => 'N',
                    5  => 'B',
                    6  => 'F',
                    7  => 'L',
                    8  => 'K',
                    9  => 'M',
                    10 => 'N',
                    11 => 'N',
                    12 => 'K',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Nye',
                    2  => 'Ful',
                    3  => 'Mbä',
                    4  => 'Ngu',
                    5  => 'Bêl',
                    6  => 'Fön',
                    7  => 'Len',
                    8  => 'Kük',
                    9  => 'Mvu',
                    10 => 'Ngb',
                    11 => 'Nab',
                    12 => 'Kak',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Nyenye',
                    2  => 'Fulundïgi',
                    3  => 'Mbängü',
                    4  => 'Ngubùe',
                    5  => 'Bêläwü',
                    6  => 'Föndo',
                    7  => 'Lengua',
                    8  => 'Kükürü',
                    9  => 'Mvuka',
                    10 => 'Ngberere',
                    11 => 'Nabändüru',
                    12 => 'Kakauka',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'K',
                    1 => 'S',
                    2 => 'T',
                    3 => 'S',
                    4 => 'K',
                    5 => 'P',
                    6 => 'Y',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Bk1',
                    1 => 'Bk2',
                    2 => 'Bk3',
                    3 => 'Bk4',
                    4 => 'Bk5',
                    5 => 'Lâp',
                    6 => 'Lây',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Bikua-ôko',
                    1 => 'Bïkua-ûse',
                    2 => 'Bïkua-ptâ',
                    3 => 'Bïkua-usïö',
                    4 => 'Bïkua-okü',
                    5 => 'Lâpôsö',
                    6 => 'Lâyenga',
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
