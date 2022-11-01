<?php

declare(strict_types=1);

/**
 * Locale data for 'ckb-IQ'.
 * Created: Tue, 01 Nov 2022 12:00:19 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ckb_IQ_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'ckb';
        $this->locale = 'ckb-IQ';
        $this->firstDayWeek = 6;
        $this->longDate = 'jی Fی Y';
        $this->shortDate = 'Y M j';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ب.ن';
        $this->pmString = 'د.ن';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'کانوونی دووەم',
                    2  => 'شوبات',
                    3  => 'ئازار',
                    4  => 'نیسان',
                    5  => 'ئایار',
                    6  => 'حوزەیران',
                    7  => 'تەمووز',
                    8  => 'ئاب',
                    9  => 'ئەیلوول',
                    10 => 'تشرینی یەکەم',
                    11 => 'تشرینی دووەم',
                    12 => 'کانونی یەکەم',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'ک',
                    2  => 'ش',
                    3  => 'ئ',
                    4  => 'ن',
                    5  => 'ئ',
                    6  => 'ح',
                    7  => 'ت',
                    8  => 'ئ',
                    9  => 'ئ',
                    10 => 'ت',
                    11 => 'ت',
                    12 => 'ک',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'کانوونی دووەم',
                    2  => 'شوبات',
                    3  => 'ئازار',
                    4  => 'نیسان',
                    5  => 'ئایار',
                    6  => 'حوزەیران',
                    7  => 'تەمووز',
                    8  => 'ئاب',
                    9  => 'ئەیلوول',
                    10 => 'تشرینی یەکەم',
                    11 => 'تشرینی دووەم',
                    12 => 'کانونی یەکەم',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'یەکشەممە',
                    1 => 'دووشەممە',
                    2 => 'سێشەممە',
                    3 => 'چوارشەممە',
                    4 => 'پێنجشەممە',
                    5 => 'ھەینی',
                    6 => 'شەممە',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'ی',
                    1 => 'د',
                    2 => 'س',
                    3 => 'چ',
                    4 => 'پ',
                    5 => 'ھ',
                    6 => 'ش',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'یەکشەممە',
                    1 => 'دووشەممە',
                    2 => 'سێشەممە',
                    3 => 'چوارشەممە',
                    4 => 'پێنجشەممە',
                    5 => 'ھەینی',
                    6 => 'شەممە',
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
