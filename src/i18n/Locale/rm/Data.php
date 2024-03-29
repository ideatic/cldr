<?php

declare(strict_types=1);

/**
 * Locale data for 'rm'.
 * Created: Tue, 01 Nov 2022 12:00:31 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_rm_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = '’';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'rm';
        $this->locale = 'rm';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'd-m-Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Romansh';
        $this->nameNative = 'Rumantsch';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Schan.',
                    2  => 'Favr.',
                    3  => 'Mars',
                    4  => 'Avr.',
                    5  => 'Matg',
                    6  => 'Zercl.',
                    7  => 'Fan.',
                    8  => 'Avust',
                    9  => 'Sett.',
                    10 => 'Oct.',
                    11 => 'Nov.',
                    12 => 'Dec.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'S',
                    2  => 'F',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'Z',
                    7  => 'F',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Da schaner',
                    2  => 'Da favrer',
                    3  => 'Da mars',
                    4  => 'D’avrigl',
                    5  => 'Da matg',
                    6  => 'Da zercladur',
                    7  => 'Da fanadur',
                    8  => 'D’avust',
                    9  => 'Da settember',
                    10 => 'D’october',
                    11 => 'Da november',
                    12 => 'Da december',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Du',
                    1 => 'Gli',
                    2 => 'Ma',
                    3 => 'Me',
                    4 => 'Gie',
                    5 => 'Ve',
                    6 => 'So',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'D',
                    1 => 'G',
                    2 => 'M',
                    3 => 'M',
                    4 => 'G',
                    5 => 'V',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Dumengia',
                    1 => 'Glindesdi',
                    2 => 'Mardi',
                    3 => 'Mesemna',
                    4 => 'Gievgia',
                    5 => 'Venderdi',
                    6 => 'Sonda',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# onn} other {# onns}}',
            'month'       => '{n, plural, one {# mais} other {# mais}}',
            'week'        => '{n, plural, one {# emna} other {# emnas}}',
            'day'         => '{n, plural, one {# di} other {# dis}}',
            'hour'        => '{n, plural, one {# ura} other {# uras}}',
            'minute'      => '{n, plural, one {# min.} other {# mins.}}',
            'second'      => '{n, plural, one {# sec.} other {# secs.}}',
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
