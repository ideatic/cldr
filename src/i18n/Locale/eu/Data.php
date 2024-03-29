<?php

declare(strict_types=1);

/**
 * Locale data for 'eu'.
 * Created: Tue, 01 Nov 2022 12:00:22 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_eu_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'eu';
        $this->locale = 'eu';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y(\\e)\\k\\o F\\r\\e\\n j(A)';
        $this->shortDate = 'Y(\\e)\\k\\o M j(A)';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Basque';
        $this->nameNative = 'Euskara';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Urt.',
                    2  => 'Ots.',
                    3  => 'Mar.',
                    4  => 'Api.',
                    5  => 'Mai.',
                    6  => 'Eka.',
                    7  => 'Uzt.',
                    8  => 'Abu.',
                    9  => 'Ira.',
                    10 => 'Urr.',
                    11 => 'Aza.',
                    12 => 'Abe.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'U',
                    2  => 'O',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'E',
                    7  => 'U',
                    8  => 'A',
                    9  => 'I',
                    10 => 'U',
                    11 => 'A',
                    12 => 'A',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Urtarrila',
                    2  => 'Otsaila',
                    3  => 'Martxoa',
                    4  => 'Apirila',
                    5  => 'Maiatza',
                    6  => 'Ekaina',
                    7  => 'Uztaila',
                    8  => 'Abuztua',
                    9  => 'Iraila',
                    10 => 'Urria',
                    11 => 'Azaroa',
                    12 => 'Abendua',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Ig.',
                    1 => 'Al.',
                    2 => 'Ar.',
                    3 => 'Az.',
                    4 => 'Og.',
                    5 => 'Or.',
                    6 => 'Lr.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'I',
                    1 => 'A',
                    2 => 'A',
                    3 => 'A',
                    4 => 'O',
                    5 => 'O',
                    6 => 'L',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Igandea',
                    1 => 'Astelehena',
                    2 => 'Asteartea',
                    3 => 'Asteazkena',
                    4 => 'Osteguna',
                    5 => 'Ostirala',
                    6 => 'Larunbata',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# urte} other {# urte}}',
            'month'       => '{n, plural, one {# hilabete} other {# hilabete}}',
            'week'        => '{n, plural, one {# aste} other {# aste}}',
            'day'         => '{n, plural, one {# egun} other {# egun}}',
            'hour'        => '{n, plural, one {# h} other {# h}}',
            'minute'      => '{n, plural, one {# min} other {# min}}',
            'second'      => '{n, plural, one {# s} other {# s}}',
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
