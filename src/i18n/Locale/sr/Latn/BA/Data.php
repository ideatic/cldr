<?php

declare(strict_types=1);

/**
 * Locale data for 'sr-Latn-BA'.
 * Created: Tue, 01 Nov 2022 12:00:33 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sr_Latn_BA_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'sr';
        $this->locale = 'sr-Latn-BA';
        $this->firstDayWeek = 1;
        $this->longDate = 'j. F Y.';
        $this->shortDate = 'j. n. Y.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'prije podne';
        $this->pmString = 'po podne';
        $this->nameEnglish = 'Serbian';
        $this->nameNative = 'Српски';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jan',
                    2  => 'Feb',
                    3  => 'Mar',
                    4  => 'Apr',
                    5  => 'Maj',
                    6  => 'Jun',
                    7  => 'Jul',
                    8  => 'Avg',
                    9  => 'Sep',
                    10 => 'Okt',
                    11 => 'Nov',
                    12 => 'Dec',
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
                    1  => 'Januar',
                    2  => 'Februar',
                    3  => 'Mart',
                    4  => 'April',
                    5  => 'Maj',
                    6  => 'Jun',
                    7  => 'Jul',
                    8  => 'Avgust',
                    9  => 'Septembar',
                    10 => 'Oktobar',
                    11 => 'Novembar',
                    12 => 'Decembar',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Ned',
                    1 => 'Pon',
                    2 => 'Uto',
                    3 => 'Sri',
                    4 => 'čet',
                    5 => 'Pet',
                    6 => 'Sub',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Nedjelja',
                    1 => 'Ponedjeljak',
                    2 => 'Utorak',
                    3 => 'Srijeda',
                    4 => 'četvrtak',
                    5 => 'Petak',
                    6 => 'Subota',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'N',
                    1 => 'P',
                    2 => 'U',
                    3 => 'S',
                    4 => 'č',
                    5 => 'P',
                    6 => 'S',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'month'       => '{n, plural, one {# mjesec} few {# mjeseca} other {# mjeseci}}',
            'week'        => '{n, plural, one {# nedjelja} few {# nedjelje} other {# nedjelja}}',
            'year'        => '{n, plural, one {# godina} one {# godinu} one {# godine} one {# godinom} few {# godine} few {# godine} few {# godine} few {# godine} other {# godina} other {# godina} other {# godina} other {# godina}}',
            'day'         => '{n, plural, one {# dan} one {# dan} one {# dana} one {# danom} few {# dana} few {# dana} few {# dana} few {# dana} other {# dana} other {# dana} other {# dana} other {# dana}}',
            'hour'        => '{n, plural, one {# sat} few {# sata} other {# sati}}',
            'minute'      => '{n, plural, one {# min} few {# min} other {# min}}',
            'second'      => '{n, plural, one {# sek} few {# sek} other {# sek}}',
            'millisecond' => '{n, plural, one {# ms} few {# ms} other {# ms}}',
            'microsecond' => '{n, plural, one {# μs} few {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, one {# ns} few {# ns} other {# ns}}',
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
