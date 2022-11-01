<?php

declare(strict_types=1);

/**
 * Locale data for 'bm'.
 * Created: Tue, 01 Nov 2022 12:00:18 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_bm_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'bm';
        $this->locale = 'bm';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Bambara';
        $this->nameNative = 'Bamanakan';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'Z',
                    2  => 'F',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'Z',
                    7  => 'Z',
                    8  => 'U',
                    9  => 'S',
                    10 => 'Ɔ',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Zan',
                    2  => 'Feb',
                    3  => 'Mar',
                    4  => 'Awi',
                    5  => 'Mɛ',
                    6  => 'Zuw',
                    7  => 'Zul',
                    8  => 'Uti',
                    9  => 'Sɛt',
                    10 => 'ɔku',
                    11 => 'Now',
                    12 => 'Des',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Zanwuye',
                    2  => 'Feburuye',
                    3  => 'Marisi',
                    4  => 'Awirili',
                    5  => 'Mɛ',
                    6  => 'Zuwɛn',
                    7  => 'Zuluye',
                    8  => 'Uti',
                    9  => 'Sɛtanburu',
                    10 => 'ɔkutɔburu',
                    11 => 'Nowanburu',
                    12 => 'Desanburu',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'K',
                    1 => 'N',
                    2 => 'T',
                    3 => 'A',
                    4 => 'A',
                    5 => 'J',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Kar',
                    1 => 'Ntɛ',
                    2 => 'Tar',
                    3 => 'Ara',
                    4 => 'Ala',
                    5 => 'Jum',
                    6 => 'Sib',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Kari',
                    1 => 'Ntɛnɛ',
                    2 => 'Tarata',
                    3 => 'Araba',
                    4 => 'Alamisa',
                    5 => 'Juma',
                    6 => 'Sibiri',
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
