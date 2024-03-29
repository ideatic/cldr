<?php

declare(strict_types=1);

/**
 * Locale data for 'nyn-UG'.
 * Created: Tue, 01 Nov 2022 12:00:30 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_nyn_UG_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'nyn';
        $this->locale = 'nyn-UG';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
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
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'KBZ',
                    2  => 'KBR',
                    3  => 'KST',
                    4  => 'KKN',
                    5  => 'KTN',
                    6  => 'KMK',
                    7  => 'KMS',
                    8  => 'KMN',
                    9  => 'KMW',
                    10 => 'KKM',
                    11 => 'KNK',
                    12 => 'KNB',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Okwokubanza',
                    2  => 'Okwakabiri',
                    3  => 'Okwakashatu',
                    4  => 'Okwakana',
                    5  => 'Okwakataana',
                    6  => 'Okwamukaaga',
                    7  => 'Okwamushanju',
                    8  => 'Okwamunaana',
                    9  => 'Okwamwenda',
                    10 => 'Okwaikumi',
                    11 => 'Okwaikumi na kumwe',
                    12 => 'Okwaikumi na ibiri',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'K',
                    2 => 'R',
                    3 => 'S',
                    4 => 'N',
                    5 => 'T',
                    6 => 'M',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'SAN',
                    1 => 'ORK',
                    2 => 'OKB',
                    3 => 'OKS',
                    4 => 'OKN',
                    5 => 'OKT',
                    6 => 'OMK',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Sande',
                    1 => 'Orwokubanza',
                    2 => 'Orwakabiri',
                    3 => 'Orwakashatu',
                    4 => 'Orwakana',
                    5 => 'Orwakataano',
                    6 => 'Orwamukaaga',
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
