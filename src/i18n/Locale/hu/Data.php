<?php

declare(strict_types=1);

/**
 * Locale data for 'hu'.
 * Created: Tue, 01 Nov 2022 12:00:25 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_hu_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'hu';
        $this->locale = 'hu';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y. F j.';
        $this->shortDate = 'Y. M j.';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'de.';
        $this->pmString = 'du.';
        $this->nameEnglish = 'Hungarian';
        $this->nameNative = 'Magyar';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jan.',
                    2  => 'Febr.',
                    3  => 'Márc.',
                    4  => 'ápr.',
                    5  => 'Máj.',
                    6  => 'Jún.',
                    7  => 'Júl.',
                    8  => 'Aug.',
                    9  => 'Szept.',
                    10 => 'Okt.',
                    11 => 'Nov.',
                    12 => 'Dec.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'J',
                    2  => 'F',
                    3  => 'M',
                    4  => 'Á',
                    5  => 'M',
                    6  => 'J',
                    7  => 'J',
                    8  => 'A',
                    9  => 'Sz',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Január',
                    2  => 'Február',
                    3  => 'Március',
                    4  => 'április',
                    5  => 'Május',
                    6  => 'Június',
                    7  => 'Július',
                    8  => 'Augusztus',
                    9  => 'Szeptember',
                    10 => 'Október',
                    11 => 'November',
                    12 => 'December',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'V',
                    1 => 'H',
                    2 => 'K',
                    3 => 'Sze',
                    4 => 'Cs',
                    5 => 'P',
                    6 => 'Szo',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'V',
                    1 => 'H',
                    2 => 'K',
                    3 => 'Sz',
                    4 => 'Cs',
                    5 => 'P',
                    6 => 'Sz',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Vasárnap',
                    1 => 'Hétfő',
                    2 => 'Kedd',
                    3 => 'Szerda',
                    4 => 'Csütörtök',
                    5 => 'Péntek',
                    6 => 'Szombat',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# év} one {# évet} one {# évvel} one {# évig} one {# évvé} other {# év} other {# évet} other {# évvel} other {# évig} other {# évvé}}',
            'month'       => '{n, plural, one {# hónap} one {# hónapot} one {# hónappal} one {# hónapig} one {# hónappá} other {# hónap} other {# hónapot} other {# hónappal} other {# hónapig} other {# hónappá}}',
            'week'        => '{n, plural, one {# hét} one {# hetet} one {# héttel} one {# hétig} one {# hétté} other {# hét} other {# hetet} other {# héttel} other {# hétig} other {# hétté}}',
            'day'         => '{n, plural, one {# nap} one {# napot} one {# nappal} one {# napig} one {# nappá} other {# nap} other {# napot} other {# nappal} other {# napig} other {# nappá}}',
            'hour'        => '{n, plural, one {# ó} other {# ó}}',
            'minute'      => '{n, plural, one {# p} other {# p}}',
            'second'      => '{n, plural, one {# mp} other {# mp}}',
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
