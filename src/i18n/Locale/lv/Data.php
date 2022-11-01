<?php

declare(strict_types=1);

/**
 * Locale data for 'lv'.
 * Created: Tue, 01 Nov 2022 12:00:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_lv_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'lv';
        $this->locale = 'lv';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y. \\g\\a\\d\\a j. F';
        $this->shortDate = 'Y. \\g\\a\\d\\a j. M';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'priekšpusdienā';
        $this->pmString = 'pēcpusdienā';
        $this->nameEnglish = 'Latvian';
        $this->nameNative = 'Latviešu';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Janv.',
                    2  => 'Febr.',
                    3  => 'Marts',
                    4  => 'Apr.',
                    5  => 'Maijs',
                    6  => 'Jūn.',
                    7  => 'Jūl.',
                    8  => 'Aug.',
                    9  => 'Sept.',
                    10 => 'Okt.',
                    11 => 'Nov.',
                    12 => 'Dec.',
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
                    1  => 'Janvāris',
                    2  => 'Februāris',
                    3  => 'Marts',
                    4  => 'Aprīlis',
                    5  => 'Maijs',
                    6  => 'Jūnijs',
                    7  => 'Jūlijs',
                    8  => 'Augusts',
                    9  => 'Septembris',
                    10 => 'Oktobris',
                    11 => 'Novembris',
                    12 => 'Decembris',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Svētd.',
                    1 => 'Pirmd.',
                    2 => 'Otrd.',
                    3 => 'Trešd.',
                    4 => 'Ceturtd.',
                    5 => 'Piektd.',
                    6 => 'Sestd.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'P',
                    2 => 'O',
                    3 => 'T',
                    4 => 'C',
                    5 => 'P',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Svētdiena',
                    1 => 'Pirmdiena',
                    2 => 'Otrdiena',
                    3 => 'Trešdiena',
                    4 => 'Ceturtdiena',
                    5 => 'Piektdiena',
                    6 => 'Sestdiena',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, zero {# gadu} zero {# gadu} zero {# gadu} zero {# gadu} zero {# gadu} one {# gads} one {# gadu} one {# gadam} one {# gada} one {# gadā} other {# gadi} other {# gadus} other {# gadiem} other {# gadu} other {# gados}}',
            'month'       => '{n, plural, zero {# mēnešu} zero {# mēnešu} zero {# mēnešu} zero {# mēnešu} zero {# mēnešu} one {# mēnesis} one {# mēnesi} one {# mēnesim} one {# mēneša} one {# mēnesī} other {# mēneši} other {# mēnešus} other {# mēnešiem} other {# mēnešu} other {# mēnešos}}',
            'week'        => '{n, plural, zero {# nedēļu} zero {# nedēļu} zero {# nedēļu} zero {# nedēļu} zero {# nedēļu} one {# nedēļa} one {# nedēļu} one {# nedēļai} one {# nedēļas} one {# nedēļā} other {# nedēļas} other {# nedēļas} other {# nedēļām} other {# nedēļu} other {# nedēļās}}',
            'day'         => '{n, plural, zero {# dienu} zero {# dienu} zero {# dienu} zero {# dienu} zero {# dienu} one {# diena} one {# dienu} one {# dienai} one {# dienas} one {# dienā} other {# dienas} other {# dienas} other {# dienām} other {# dienu} other {# dienās}}',
            'hour'        => '{n, plural, zero {# st.} one {# st.} other {# st.}}',
            'second'      => '{n, plural, zero {# sek.} one {# sek.} other {# sek.}}',
            'millisecond' => '{n, plural, zero {# ms} one {# ms} other {# ms}}',
            'microsecond' => '{n, plural, zero {# μs} one {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, zero {# ns} one {# ns} other {# ns}}',
            'minute'      => '{n, plural, one {# min} other {# min}}',
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
