<?php

declare(strict_types=1);

/**
 * Locale data for 'rw-RW'.
 * Created: Tue, 01 Nov 2022 12:00:32 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_rw_RW_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'rw';
        $this->locale = 'rw-RW';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Kinyarwanda (Rwanda)';
        $this->nameNative = 'Kinyarwanda (U Rwanda)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Mut.',
                    2  => 'Gas.',
                    3  => 'Wer.',
                    4  => 'Mat.',
                    5  => 'Gic.',
                    6  => 'Kam.',
                    7  => 'Nya.',
                    8  => 'Kan.',
                    9  => 'Nze.',
                    10 => 'Ukw.',
                    11 => 'Ugu.',
                    12 => 'Uku.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => '1',
                    2  => '2',
                    3  => '3',
                    4  => '4',
                    5  => '5',
                    6  => '6',
                    7  => '7',
                    8  => '8',
                    9  => '9',
                    10 => '10',
                    11 => '11',
                    12 => '12',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Mutarama',
                    2  => 'Gashyantare',
                    3  => 'Werurwe',
                    4  => 'Mata',
                    5  => 'Gicurasi',
                    6  => 'Kamena',
                    7  => 'Nyakanga',
                    8  => 'Kanama',
                    9  => 'Nzeli',
                    10 => 'Ukwakira',
                    11 => 'Ugushyingo',
                    12 => 'Ukuboza',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Cyu.',
                    1 => 'Mbe.',
                    2 => 'Kab.',
                    3 => 'Gtu.',
                    4 => 'Kan.',
                    5 => 'Gnu.',
                    6 => 'Gnd.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'T',
                    3 => 'W',
                    4 => 'T',
                    5 => 'F',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Ku cyumweru',
                    1 => 'Kuwa mbere',
                    2 => 'Kuwa kabiri',
                    3 => 'Kuwa gatatu',
                    4 => 'Kuwa kane',
                    5 => 'Kuwa gatanu',
                    6 => 'Kuwa gatandatu',
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
