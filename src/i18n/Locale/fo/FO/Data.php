<?php

declare(strict_types=1);

/**
 * Locale data for 'fo-FO'.
 * Created: Tue, 01 Nov 2022 12:00:23 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_fo_FO_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'fo';
        $this->locale = 'fo-FO';
        $this->firstDayWeek = 1;
        $this->longDate = 'j. F Y';
        $this->shortDate = 'd.m.Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Faroese (Faroe Islands)';
        $this->nameNative = 'Føroyskt (Føroyar)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jan.',
                    2  => 'Feb.',
                    3  => 'Mar.',
                    4  => 'Apr.',
                    5  => 'Mai',
                    6  => 'Jun.',
                    7  => 'Jul.',
                    8  => 'Aug.',
                    9  => 'Sep.',
                    10 => 'Okt.',
                    11 => 'Nov.',
                    12 => 'Des.',
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
                    3  => 'Mars',
                    4  => 'Apríl',
                    5  => 'Mai',
                    6  => 'Juni',
                    7  => 'Juli',
                    8  => 'August',
                    9  => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Sun.',
                    1 => 'Mán.',
                    2 => 'Týs.',
                    3 => 'Mik.',
                    4 => 'Hós.',
                    5 => 'Frí.',
                    6 => 'Ley.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'T',
                    3 => 'M',
                    4 => 'H',
                    5 => 'F',
                    6 => 'L',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Sunnudagur',
                    1 => 'Mánadagur',
                    2 => 'Týsdagur',
                    3 => 'Mikudagur',
                    4 => 'Hósdagur',
                    5 => 'Fríggjadagur',
                    6 => 'Leygardagur',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# ár} other {# ár}}',
            'month'       => '{n, plural, one {# mánaður} other {# mánaðir}}',
            'week'        => '{n, plural, one {# vika} other {# vikur}}',
            'day'         => '{n, plural, one {# dagur} other {# dagar}}',
            'hour'        => '{n, plural, one {# t.} other {# t.}}',
            'minute'      => '{n, plural, one {# min.} other {# min.}}',
            'second'      => '{n, plural, one {# sek.} other {# sek.}}',
            'millisecond' => '{n, plural, one {# ms.} other {# ms.}}',
            'microsecond' => '{n, plural, one {# μs.} other {# μs.}}',
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
