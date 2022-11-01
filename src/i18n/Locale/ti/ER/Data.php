<?php

declare(strict_types=1);

/**
 * Locale data for 'ti-ER'.
 * Created: Tue, 01 Nov 2022 12:00:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ti_ER_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '¤%f';
        $this->language = 'ti';
        $this->locale = 'ti-ER';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ቅ.ቀ.';
        $this->pmString = 'ድ.ቀ.';
        $this->nameEnglish = 'Tigrinya (Eritrea)';
        $this->nameNative = 'ትግርኛ (ኤርትራ)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'ጥሪ',
                    2  => 'ለካ',
                    3  => 'መጋ',
                    4  => 'ሚያ',
                    5  => 'ግን',
                    6  => 'ሰነ',
                    7  => 'ሓም',
                    8  => 'ነሓ',
                    9  => 'መስ',
                    10 => 'ጥቅ',
                    11 => 'ሕዳ',
                    12 => 'ታሕ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'ጥ',
                    2  => 'ለ',
                    3  => 'መ',
                    4  => 'ሚ',
                    5  => 'ግ',
                    6  => 'ሰ',
                    7  => 'ሓ',
                    8  => 'ነ',
                    9  => 'መ',
                    10 => 'ጥ',
                    11 => 'ሕ',
                    12 => 'ታ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'ጥሪ',
                    2  => 'ለካቲት',
                    3  => 'መጋቢት',
                    4  => 'ሚያዝያ',
                    5  => 'ግንቦት',
                    6  => 'ሰነ',
                    7  => 'ሓምለ',
                    8  => 'ነሓሰ',
                    9  => 'መስከረም',
                    10 => 'ጥቅምቲ',
                    11 => 'ሕዳር',
                    12 => 'ታሕሳስ',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'ሰን',
                    1 => 'ሰኑ',
                    2 => 'ሰሉ',
                    3 => 'ረቡ',
                    4 => 'ሓሙ',
                    5 => 'ዓር',
                    6 => 'ቀዳ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'ሰ',
                    1 => 'ሰ',
                    2 => 'ሰ',
                    3 => 'ረ',
                    4 => 'ሓ',
                    5 => 'ዓ',
                    6 => 'ቀ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'ሰንበት',
                    1 => 'ሰኑይ',
                    2 => 'ሰሉስ',
                    3 => 'ረቡዕ',
                    4 => 'ሓሙስ',
                    5 => 'ዓርቢ',
                    6 => 'ቀዳም',
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
