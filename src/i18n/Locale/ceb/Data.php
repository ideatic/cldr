<?php

declare(strict_types=1);

/**
 * Locale data for 'ceb'.
 * Created: Tue, 01 Nov 2022 12:00:19 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ceb_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ceb';
        $this->locale = 'ceb';
        $this->firstDayWeek = 1;
        $this->longDate = 'F j, Y';
        $this->shortDate = 'M j, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Ene',
                    2  => 'Peb',
                    3  => 'Mar',
                    4  => 'Abr',
                    5  => 'May',
                    6  => 'Hun',
                    7  => 'Hul',
                    8  => 'Ago',
                    9  => 'Set',
                    10 => 'Okt',
                    11 => 'Nob',
                    12 => 'Dis',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'E',
                    2  => 'P',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'H',
                    7  => 'H',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Enero',
                    2  => 'Pebrero',
                    3  => 'Marso',
                    4  => 'Abril',
                    5  => 'Mayo',
                    6  => 'Hunyo',
                    7  => 'Hulyo',
                    8  => 'Agosto',
                    9  => 'Setyembre',
                    10 => 'Oktubre',
                    11 => 'Nobyembre',
                    12 => 'Disyembre',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Dom',
                    1 => 'Lun',
                    2 => 'Mar',
                    3 => 'Miy',
                    4 => 'Huw',
                    5 => 'Biy',
                    6 => 'Sab',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'D',
                    1 => 'L',
                    2 => 'M',
                    3 => 'M',
                    4 => 'H',
                    5 => 'B',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Domingo',
                    1 => 'Lunes',
                    2 => 'Martes',
                    3 => 'Miyerkules',
                    4 => 'Huwebes',
                    5 => 'Biyernes',
                    6 => 'Sabado',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# ka tuig} other {# ka mga tuig}}',
            'month'       => '{n, plural, one {# ka buwan} other {# ka mga buwan}}',
            'week'        => '{n, plural, one {# ka semana} other {# ka mga semana}}',
            'day'         => '{n, plural, one {# ka adlaw} other {# ka mga adlaw}}',
            'hour'        => '{n, plural, one {# ka oras} other {# ka oras}}',
            'minute'      => '{n, plural, one {# ka minuto} other {# ka minuto}}',
            'second'      => '{n, plural, one {#segundo} other {#segundo}}',
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
