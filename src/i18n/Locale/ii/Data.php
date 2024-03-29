<?php

declare(strict_types=1);

/**
 * Locale data for 'ii'.
 * Created: Tue, 01 Nov 2022 12:00:25 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ii_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ii';
        $this->locale = 'ii';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ꎸꄑ';
        $this->pmString = 'ꁯꋒ';
        $this->nameEnglish = 'Sichuan Yi';
        $this->nameNative = 'ꆈꌠꉙ';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'ꋍꆪ',
                    2  => 'ꑍꆪ',
                    3  => 'ꌕꆪ',
                    4  => 'ꇖꆪ',
                    5  => 'ꉬꆪ',
                    6  => 'ꃘꆪ',
                    7  => 'ꏃꆪ',
                    8  => 'ꉆꆪ',
                    9  => 'ꈬꆪ',
                    10 => 'ꊰꆪ',
                    11 => 'ꊰꊪꆪ',
                    12 => 'ꊰꑋꆪ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => '1',
                    2  => '2',
                    3  => '3',
                    4  => '4',
                    5  => '5',
                    6  => '6',
                    7  => '7',
                    8  => '8',
                    9  => '9',
                    10 => '10',
                    11 => '11',
                    12 => '12',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'ꋍꆪ',
                    2  => 'ꑍꆪ',
                    3  => 'ꌕꆪ',
                    4  => 'ꇖꆪ',
                    5  => 'ꉬꆪ',
                    6  => 'ꃘꆪ',
                    7  => 'ꏃꆪ',
                    8  => 'ꉆꆪ',
                    9  => 'ꈬꆪ',
                    10 => 'ꊰꆪ',
                    11 => 'ꊰꊪꆪ',
                    12 => 'ꊰꑋꆪ',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'ꑭꆏ',
                    1 => 'ꆏꋍ',
                    2 => 'ꆏꑍ',
                    3 => 'ꆏꌕ',
                    4 => 'ꆏꇖ',
                    5 => 'ꆏꉬ',
                    6 => 'ꆏꃘ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'ꆏ',
                    1 => 'ꋍ',
                    2 => 'ꑍ',
                    3 => 'ꌕ',
                    4 => 'ꇖ',
                    5 => 'ꉬ',
                    6 => 'ꃘ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'ꑭꆏꑍ',
                    1 => 'ꆏꊂꋍ',
                    2 => 'ꆏꊂꑍ',
                    3 => 'ꆏꊂꌕ',
                    4 => 'ꆏꊂꇖ',
                    5 => 'ꆏꊂꉬ',
                    6 => 'ꆏꊂꃘ',
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
