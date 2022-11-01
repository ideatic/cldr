<?php

declare(strict_types=1);

/**
 * Locale data for 'zu-ZA'.
 * Created: Tue, 01 Nov 2022 12:00:36 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_zu_ZA_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'zu';
        $this->locale = 'zu-ZA';
        $this->firstDayWeek = 0;
        $this->longDate = 'F j, Y';
        $this->shortDate = 'M j, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Zulu (South Africa)';
        $this->nameNative = 'IsiZulu (iNingizimu Afrika)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jan',
                    2  => 'Feb',
                    3  => 'Mas',
                    4  => 'Eph',
                    5  => 'Mey',
                    6  => 'Jun',
                    7  => 'Jul',
                    8  => 'Aga',
                    9  => 'Sep',
                    10 => 'Okt',
                    11 => 'Nov',
                    12 => 'Dis',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'J',
                    2  => 'F',
                    3  => 'M',
                    4  => 'E',
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
                    1  => 'Januwari',
                    2  => 'Februwari',
                    3  => 'Mashi',
                    4  => 'Ephreli',
                    5  => 'Meyi',
                    6  => 'Juni',
                    7  => 'Julayi',
                    8  => 'Agasti',
                    9  => 'Septhemba',
                    10 => 'Okthoba',
                    11 => 'Novemba',
                    12 => 'Disemba',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Son',
                    1 => 'Mso',
                    2 => 'Bil',
                    3 => 'Tha',
                    4 => 'Sin',
                    5 => 'Hla',
                    6 => 'Mgq',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'B',
                    3 => 'T',
                    4 => 'S',
                    5 => 'H',
                    6 => 'M',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'ISonto',
                    1 => 'UMsombuluko',
                    2 => 'ULwesibili',
                    3 => 'ULwesithathu',
                    4 => 'ULwesine',
                    5 => 'ULwesihlanu',
                    6 => 'UMgqibelo',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# y} other {# y}}',
            'month'       => '{n, plural, one {# inyanga} other {# izinyanga}}',
            'week'        => '{n, plural, one {# iviki} other {# amaviki}}',
            'day'         => '{n, plural, one {# usuku} other {# izinsuku}}',
            'hour'        => '{n, plural, one {# hora} other {# hr}}',
            'minute'      => '{n, plural, one {# iminithi} other {# iminithi}}',
            'second'      => '{n, plural, one {# sekhondi} other {# sec}}',
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
