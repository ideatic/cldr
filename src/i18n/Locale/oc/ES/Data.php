<?php

declare(strict_types=1);

/**
 * Locale data for 'oc-ES'.
 * Created: Tue, 01 Nov 2022 12:00:30 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_oc_ES_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '%f¤';
        $this->currencyNegativeFormat = '%f¤';
        $this->language = 'oc';
        $this->locale = 'oc-ES';
        $this->firstDayWeek = 1;
        $this->longDate = 'j \\d\\e F \\d\\e Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Occitan (Spain)';
        $this->nameNative = 'Occitan (Espanha)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Gèr',
                    2  => 'Her',
                    3  => 'Mar',
                    4  => 'Abr',
                    5  => 'Mai',
                    6  => 'Jun',
                    7  => 'Jur',
                    8  => 'Ago',
                    9  => 'Set',
                    10 => 'Oct',
                    11 => 'Nov',
                    12 => 'Dec',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Gèr',
                    2  => 'Hereuèr',
                    3  => 'Març',
                    4  => 'Abriu',
                    5  => 'Mai',
                    6  => 'Junh',
                    7  => 'Juriòl',
                    8  => 'Agost',
                    9  => 'Seteme',
                    10 => 'Octobre',
                    11 => 'Noveme',
                    12 => 'Deseme',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'G',
                    2  => 'H',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'J',
                    7  => 'J',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Dim',
                    1 => 'Del',
                    2 => 'Dma',
                    3 => 'Dmè',
                    4 => 'Dij',
                    5 => 'Diu',
                    6 => 'Dis',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'D',
                    1 => 'L',
                    2 => 'M',
                    3 => 'X',
                    4 => 'J',
                    5 => 'U',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Dimenge',
                    1 => 'Deluns',
                    2 => 'Dimars',
                    3 => 'Dimèrcles',
                    4 => 'Dijaus',
                    5 => 'Diuendres',
                    6 => 'Dissabte',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, other {# annadas}}',
            'month'       => '{n, plural, other {# mes}}',
            'week'        => '{n, plural, other {# setmanas}}',
            'day'         => '{n, plural, other {# jorns}}',
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
