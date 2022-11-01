<?php

declare(strict_types=1);

/**
 * Locale data for 'nus'.
 * Created: Tue, 01 Nov 2022 12:00:30 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_nus_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'nus';
        $this->locale = 'nus';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'RW';
        $this->pmString = 'TŊ';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'T',
                    2  => 'P',
                    3  => 'D',
                    4  => 'G',
                    5  => 'D',
                    6  => 'K',
                    7  => 'P',
                    8  => 'T',
                    9  => 'T',
                    10 => 'L',
                    11 => 'K',
                    12 => 'T',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Tiop',
                    2  => 'Pɛt',
                    3  => 'Duɔ̱ɔ̱',
                    4  => 'Guak',
                    5  => 'Duä',
                    6  => 'Kor',
                    7  => 'Pay',
                    8  => 'Thoo',
                    9  => 'Tɛɛ',
                    10 => 'Laa',
                    11 => 'Kur',
                    12 => 'Tid',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Tiop thar pɛt',
                    2  => 'Pɛt',
                    3  => 'Duɔ̱ɔ̱ŋ',
                    4  => 'Guak',
                    5  => 'Duät',
                    6  => 'Kornyoot',
                    7  => 'Pay yie̱tni',
                    8  => 'Tho̱o̱r',
                    9  => 'Tɛɛr',
                    10 => 'Laath',
                    11 => 'Kur',
                    12 => 'Tio̱p in di̱i̱t',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'C',
                    1 => 'J',
                    2 => 'R',
                    3 => 'D',
                    4 => 'Ŋ',
                    5 => 'D',
                    6 => 'B',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Cäŋ',
                    1 => 'Jiec',
                    2 => 'Rɛw',
                    3 => 'Diɔ̱k',
                    4 => 'Ŋuaan',
                    5 => 'Dhieec',
                    6 => 'Bäkɛl',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Cäŋ kuɔth',
                    1 => 'Jiec la̱t',
                    2 => 'Rɛw lätni',
                    3 => 'Diɔ̱k lätni',
                    4 => 'Ŋuaan lätni',
                    5 => 'Dhieec lätni',
                    6 => 'Bäkɛl lätni',
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
