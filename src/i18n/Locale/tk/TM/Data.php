<?php

declare(strict_types=1);

/**
 * Locale data for 'tk-TM'.
 * Created: Tue, 01 Nov 2022 12:00:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_tk_TM_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'tk';
        $this->locale = 'tk-TM';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'günortadan öň';
        $this->pmString = 'günortadan soň';
        $this->nameEnglish = 'Turkmen (Turkmenistan)';
        $this->nameNative = 'Türkmen dili (Türkmenistan)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'ýan',
                    2  => 'Few',
                    3  => 'Mart',
                    4  => 'Apr',
                    5  => 'Maý',
                    6  => 'Iýun',
                    7  => 'Iýul',
                    8  => 'Awg',
                    9  => 'Sen',
                    10 => 'Okt',
                    11 => 'Noý',
                    12 => 'Dek',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'Ý',
                    2  => 'F',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'I',
                    7  => 'I',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'ýanwar',
                    2  => 'Fewral',
                    3  => 'Mart',
                    4  => 'Aprel',
                    5  => 'Maý',
                    6  => 'Iýun',
                    7  => 'Iýul',
                    8  => 'Awgust',
                    9  => 'Sentýabr',
                    10 => 'Oktýabr',
                    11 => 'Noýabr',
                    12 => 'Dekabr',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'ýek',
                    1 => 'Duş',
                    2 => 'Siş',
                    3 => 'çar',
                    4 => 'Pen',
                    5 => 'Ann',
                    6 => 'şen',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'Ý',
                    1 => 'D',
                    2 => 'S',
                    3 => 'Ç',
                    4 => 'P',
                    5 => 'A',
                    6 => 'Ş',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'ýekşenbe',
                    1 => 'Duşenbe',
                    2 => 'Sişenbe',
                    3 => 'çarşenbe',
                    4 => 'Penşenbe',
                    5 => 'Anna',
                    6 => 'şenbe',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# ýyl} other {# ýyl}}',
            'month'       => '{n, plural, one {# aý} other {# aý}}',
            'week'        => '{n, plural, one {# hepde} other {# hepde}}',
            'day'         => '{n, plural, one {# gün} other {# gün}}',
            'hour'        => '{n, plural, one {# sag} other {# sag}}',
            'minute'      => '{n, plural, one {# min} other {# min}}',
            'second'      => '{n, plural, one {# sek} other {# sek}}',
            'millisecond' => '{n, plural, one {# msek} other {# msek}}',
            'microsecond' => '{n, plural, one {# mks} other {# mks}}',
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
