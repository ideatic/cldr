<?php

declare(strict_types=1);

/**
 * Locale data for 'dav'.
 * Created: Tue, 01 Nov 2022 12:00:20 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_dav_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'dav';
        $this->locale = 'dav';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'Luma lwa K';
        $this->pmString = 'luma lwa p';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'I',
                    2  => 'K',
                    3  => 'K',
                    4  => 'K',
                    5  => 'K',
                    6  => 'K',
                    7  => 'M',
                    8  => 'W',
                    9  => 'I',
                    10 => 'I',
                    11 => 'I',
                    12 => 'I',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Imb',
                    2  => 'Kaw',
                    3  => 'Kad',
                    4  => 'Kan',
                    5  => 'Kas',
                    6  => 'Kar',
                    7  => 'Mfu',
                    8  => 'Wun',
                    9  => 'Ike',
                    10 => 'Iku',
                    11 => 'Imw',
                    12 => 'Iwi',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Mori ghwa imbiri',
                    2  => 'Mori ghwa kawi',
                    3  => 'Mori ghwa kadadu',
                    4  => 'Mori ghwa kana',
                    5  => 'Mori ghwa kasanu',
                    6  => 'Mori ghwa karandadu',
                    7  => 'Mori ghwa mfungade',
                    8  => 'Mori ghwa wunyanya',
                    9  => 'Mori ghwa ikenda',
                    10 => 'Mori ghwa ikumi',
                    11 => 'Mori ghwa ikumi na imweri',
                    12 => 'Mori ghwa ikumi na iwi',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'J',
                    1 => 'J',
                    2 => 'K',
                    3 => 'K',
                    4 => 'K',
                    5 => 'K',
                    6 => 'N',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Jum',
                    1 => 'Jim',
                    2 => 'Kaw',
                    3 => 'Kad',
                    4 => 'Kan',
                    5 => 'Kas',
                    6 => 'Ngu',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Ituku ja jumwa',
                    1 => 'Kuramuka jimweri',
                    2 => 'Kuramuka kawi',
                    3 => 'Kuramuka kadadu',
                    4 => 'Kuramuka kana',
                    5 => 'Kuramuka kasanu',
                    6 => 'Kifula nguwo',
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
