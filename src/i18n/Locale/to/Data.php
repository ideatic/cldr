<?php

declare(strict_types=1);

/**
 * Locale data for 'to'.
 * Created: Tue, 01 Nov 2022 12:00:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_to_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'to';
        $this->locale = 'to';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'hengihengi';
        $this->pmString = 'efiafi';
        $this->nameEnglish = 'Tongan';
        $this->nameNative = 'Lea fakatonga';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Sān',
                    2  => 'Fēp',
                    3  => 'Maʻa',
                    4  => 'ʻEpe',
                    5  => 'Mē',
                    6  => 'Sun',
                    7  => 'Siu',
                    8  => 'ʻAok',
                    9  => 'Sep',
                    10 => 'ʻOka',
                    11 => 'Nōv',
                    12 => 'Tīs',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'S',
                    2  => 'F',
                    3  => 'M',
                    4  => 'ʻE',
                    5  => 'M',
                    6  => 'S',
                    7  => 'S',
                    8  => 'ʻA',
                    9  => 'S',
                    10 => 'ʻO',
                    11 => 'N',
                    12 => 'T',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Sānuali',
                    2  => 'Fēpueli',
                    3  => 'Maʻasi',
                    4  => 'ʻEpeleli',
                    5  => 'Mē',
                    6  => 'Sune',
                    7  => 'Siulai',
                    8  => 'ʻAokosi',
                    9  => 'Sepitema',
                    10 => 'ʻOkatopa',
                    11 => 'Nōvema',
                    12 => 'Tīsema',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Sāp',
                    1 => 'Mōn',
                    2 => 'Tūs',
                    3 => 'Pul',
                    4 => 'Tuʻa',
                    5 => 'Fal',
                    6 => 'Tok',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'T',
                    3 => 'P',
                    4 => 'T',
                    5 => 'F',
                    6 => 'T',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Sāpate',
                    1 => 'Mōnite',
                    2 => 'Tūsite',
                    3 => 'Pulelulu',
                    4 => 'Tuʻapulelulu',
                    5 => 'Falaite',
                    6 => 'Tokonaki',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, other {taʻu ʻe #}}',
            'month'       => '{n, plural, other {māhina ʻe #}}',
            'week'        => '{n, plural, other {uike ʻe #}}',
            'day'         => '{n, plural, other {ʻaho ʻe #}}',
            'hour'        => '{n, plural, other {h ʻe #}}',
            'minute'      => '{n, plural, other {m ʻe #}}',
            'second'      => '{n, plural, other {s ʻe #}}',
            'millisecond' => '{n, plural, other {ms ʻe #}}',
            'microsecond' => '{n, plural, other {μs ʻe #}}',
            'nanosecond'  => '{n, plural, other {ns ʻe #}}',
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
