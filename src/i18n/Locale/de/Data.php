<?php

declare(strict_types=1);

/**
 * Locale data for 'de'.
 * Created: Tue, 01 Nov 2022 12:00:20 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_de_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'de';
        $this->locale = 'de';
        $this->firstDayWeek = 1;
        $this->longDate = 'j. F Y';
        $this->shortDate = 'd.m.Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'German';
        $this->nameNative = 'Deutsch';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jan.',
                    2  => 'Feb.',
                    3  => 'März',
                    4  => 'Apr.',
                    5  => 'Mai',
                    6  => 'Juni',
                    7  => 'Juli',
                    8  => 'Aug.',
                    9  => 'Sept.',
                    10 => 'Okt.',
                    11 => 'Nov.',
                    12 => 'Dez.',
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
                    3  => 'März',
                    4  => 'April',
                    5  => 'Mai',
                    6  => 'Juni',
                    7  => 'Juli',
                    8  => 'August',
                    9  => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Dezember',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'So.',
                    1 => 'Mo.',
                    2 => 'Di.',
                    3 => 'Mi.',
                    4 => 'Do.',
                    5 => 'Fr.',
                    6 => 'Sa.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'D',
                    3 => 'M',
                    4 => 'D',
                    5 => 'F',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Sonntag',
                    1 => 'Montag',
                    2 => 'Dienstag',
                    3 => 'Mittwoch',
                    4 => 'Donnerstag',
                    5 => 'Freitag',
                    6 => 'Samstag',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# Jahr} one {# Jahr} one {# Jahr} one {# Jahrs} other {# Jahre} other {# Jahre} other {# Jahren} other {# Jahre}}',
            'month'       => '{n, plural, one {# Monat} one {# Monat} one {# Monat} one {# Monats} other {# Monate} other {# Monate} other {# Monaten} other {# Monate}}',
            'week'        => '{n, plural, one {# Woche} one {# Woche} one {# Woche} one {# Woche} other {# Wochen} other {# Wochen} other {# Wochen} other {# Wochen}}',
            'day'         => '{n, plural, one {# Tag} one {# Tag} one {# Tag} one {# Tages} other {# Tage} other {# Tage} other {# Tagen} other {# Tage}}',
            'hour'        => '{n, plural, one {# Std.} other {# Std.}}',
            'minute'      => '{n, plural, one {# Min.} other {# Min.}}',
            'second'      => '{n, plural, one {# Sek.} other {# Sek.}}',
            'microsecond' => '{n, plural, one {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, one {# ns} other {# ns}}',
            'millisecond' => '{n, plural, one {# ms} other {# ms}}',
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
