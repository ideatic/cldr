<?php

declare(strict_types=1);

/**
 * Locale data for 'hr-BA'.
 * Created: Tue, 01 Nov 2022 12:00:25 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_hr_BA_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'hr';
        $this->locale = 'hr-BA';
        $this->firstDayWeek = 1;
        $this->longDate = 'j. F Y.';
        $this->shortDate = 'j. n. y.';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Croatian (Bosnia)';
        $this->nameNative = 'Hrvatski (Bosna i Hercegovina)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Sij',
                    2  => 'Velj',
                    3  => 'Ožu',
                    4  => 'Tra',
                    5  => 'Svi',
                    6  => 'Lip',
                    7  => 'Srp',
                    8  => 'Kol',
                    9  => 'Ruj',
                    10 => 'Lis',
                    11 => 'Stu',
                    12 => 'Pro',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => '1.',
                    2  => '2.',
                    3  => '3.',
                    4  => '4.',
                    5  => '5.',
                    6  => '6.',
                    7  => '7.',
                    8  => '8.',
                    9  => '9.',
                    10 => '10.',
                    11 => '11.',
                    12 => '12.',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Siječnja',
                    2  => 'Veljače',
                    3  => 'Ožujka',
                    4  => 'Travnja',
                    5  => 'Svibnja',
                    6  => 'Lipnja',
                    7  => 'Srpnja',
                    8  => 'Kolovoza',
                    9  => 'Rujna',
                    10 => 'Listopada',
                    11 => 'Studenoga',
                    12 => 'Prosinca',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'N',
                    1 => 'P',
                    2 => 'U',
                    3 => 'S',
                    4 => 'Č',
                    5 => 'P',
                    6 => 'S',
                ];
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
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# godina} one {# godinu} one {# godine} one {# godinom} few {# godine} few {# godine} few {# godine} few {# godine} other {# godina} other {# godina} other {# godina} other {# godina}}',
            'month'       => '{n, plural, one {# mjesec} one {# mjesec} one {# mjeseca} one {# mjesecom} few {# mjeseca} few {# mjeseca} few {# mjeseca} few {# mjeseca} other {# mjeseci} other {# mjeseci} other {# mjeseci} other {# mjeseci}}',
            'week'        => '{n, plural, one {# tjedan} one {# tjedan} one {# tjedna} one {# tjednom} few {# tjedna} few {# tjedna} few {# tjedna} few {# tjedna} other {# tjedana} other {# tjedana} other {# tjedana} other {# tjedana}}',
            'day'         => '{n, plural, one {# dan} one {# dan} one {# dana} one {# danom} few {# dana} few {# dana} few {# dana} few {# dana} other {# dana} other {# dana} other {# dana} other {# dana}}',
            'hour'        => '{n, plural, one {# h} few {# h} other {# h}}',
            'minute'      => '{n, plural, one {# min} few {# min} other {# min}}',
            'second'      => '{n, plural, one {# s} few {# s} other {# s}}',
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
