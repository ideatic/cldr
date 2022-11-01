<?php

declare(strict_types=1);

/**
 * Locale data for 'ur'.
 * Created: Tue, 01 Nov 2022 12:00:35 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ur_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ur';
        $this->locale = 'ur';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F، Y';
        $this->shortDate = 'j M، Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Urdu';
        $this->nameNative = 'اردو';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'جنوری',
                    2  => 'فروری',
                    3  => 'مارچ',
                    4  => 'اپریل',
                    5  => 'مئی',
                    6  => 'جون',
                    7  => 'جولائی',
                    8  => 'اگست',
                    9  => 'ستمبر',
                    10 => 'اکتوبر',
                    11 => 'نومبر',
                    12 => 'دسمبر',
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
                    1  => 'جنوری',
                    2  => 'فروری',
                    3  => 'مارچ',
                    4  => 'اپریل',
                    5  => 'مئی',
                    6  => 'جون',
                    7  => 'جولائی',
                    8  => 'اگست',
                    9  => 'ستمبر',
                    10 => 'اکتوبر',
                    11 => 'نومبر',
                    12 => 'دسمبر',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'اتوار',
                    1 => 'پیر',
                    2 => 'منگل',
                    3 => 'بدھ',
                    4 => 'جمعرات',
                    5 => 'جمعہ',
                    6 => 'ہفتہ',
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
                    0 => 'اتوار',
                    1 => 'پیر',
                    2 => 'منگل',
                    3 => 'بدھ',
                    4 => 'جمعرات',
                    5 => 'جمعہ',
                    6 => 'ہفتہ',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# سال} other {# سال}}',
            'month'       => '{n, plural, one {# مہینہ} other {# مہینے}}',
            'week'        => '{n, plural, one {# ہفتہ} other {# ہفتے}}',
            'day'         => '{n, plural, one {# دن} other {# دن}}',
            'hour'        => '{n, plural, one {# گھنٹہ} other {# گھنٹے}}',
            'minute'      => '{n, plural, one {# منٹ} other {# منٹ}}',
            'second'      => '{n, plural, one {# سیکنڈ} other {# سیکنڈ}}',
            'millisecond' => '{n, plural, one {# ملی سیکنڈ} other {# ملی سیکنڈ}}',
            'microsecond' => '{n, plural, one {# مائیکرو سیکنڈ} other {# مائیکرو سیکنڈ}}',
            'nanosecond'  => '{n, plural, one {# نینو سیکنڈ} other {# نینو سیکنڈ}}',
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
