<?php

declare(strict_types=1);

/**
 * Locale data for 'pcm'.
 * Created: Tue, 01 Nov 2022 12:00:31 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_pcm_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '¤%f';
        $this->language = 'pcm';
        $this->locale = 'pcm';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'Fọ mọ́nin';
        $this->pmString = 'Fọ ívnin';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jén',
                    2  => 'Fẹ́b',
                    3  => 'Mach',
                    4  => 'Épr',
                    5  => 'Mee',
                    6  => 'Jun',
                    7  => 'Jul',
                    8  => 'Ọgọ',
                    9  => 'Sẹp',
                    10 => 'Ọkt',
                    11 => 'Nọv',
                    12 => 'Dis',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'J',
                    2  => 'F',
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
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Jénúári',
                    2  => 'Fẹ́búári',
                    3  => 'Mach',
                    4  => 'Éprel',
                    5  => 'Mee',
                    6  => 'Jun',
                    7  => 'Julai',
                    8  => 'Ọgọst',
                    9  => 'Sẹptẹ́mba',
                    10 => 'Ọktóba',
                    11 => 'Nọvẹ́mba',
                    12 => 'Disẹ́mba',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Sọ́n',
                    1 => 'Mọ́n',
                    2 => 'Tiú',
                    3 => 'Wẹ́n',
                    4 => 'Tọ́z',
                    5 => 'Fraí',
                    6 => 'Sát',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'T',
                    3 => 'W',
                    4 => 'T',
                    5 => 'F',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Sọ́ndè',
                    1 => 'Mọ́ndè',
                    2 => 'Tiúzdè',
                    3 => 'Wẹ́nẹ́zdè',
                    4 => 'Tọ́zdè',
                    5 => 'Fraídè',
                    6 => 'Sátọdè',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# Yiẹ} other {# Yiẹ}}',
            'month'       => '{n, plural, one {# Mọnt} other {# Mọnt}}',
            'week'        => '{n, plural, one {# Wik} other {# Wik}}',
            'day'         => '{n, plural, one {# Dè} other {# Dè}}',
            'hour'        => '{n, plural, one {# Áwa} other {# Áwa}}',
            'minute'      => '{n, plural, one {# Mínit} other {# Mínit}}',
            'second'      => '{n, plural, one {# Sẹ́kọn} other {# Sẹ́kọn}}',
            'millisecond' => '{n, plural, one {# Mílisẹ́kọn} other {# Mílisẹ́kọn}}',
            'microsecond' => '{n, plural, one {#Maíksẹ́k} other {#Maiksẹk}}',
            'nanosecond'  => '{n, plural, one {# Nansẹk} other {# Nansẹk}}',
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
