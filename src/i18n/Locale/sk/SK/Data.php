<?php

declare(strict_types=1);

/**
 * Locale data for 'sk-SK'.
 * Created: Tue, 01 Nov 2022 12:00:32 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sk_SK_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'sk';
        $this->locale = 'sk-SK';
        $this->firstDayWeek = 1;
        $this->longDate = 'j. F Y';
        $this->shortDate = 'j. n. Y';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Slovak (Slovakia)';
        $this->nameNative = 'Slovenčina (Slovensko)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jan',
                    2  => 'Feb',
                    3  => 'Mar',
                    4  => 'Apr',
                    5  => 'Máj',
                    6  => 'Jún',
                    7  => 'Júl',
                    8  => 'Aug',
                    9  => 'Sep',
                    10 => 'Okt',
                    11 => 'Nov',
                    12 => 'Dec',
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
                    1  => 'Januára',
                    2  => 'Februára',
                    3  => 'Marca',
                    4  => 'Apríla',
                    5  => 'Mája',
                    6  => 'Júna',
                    7  => 'Júla',
                    8  => 'Augusta',
                    9  => 'Septembra',
                    10 => 'Októbra',
                    11 => 'Novembra',
                    12 => 'Decembra',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Ne',
                    1 => 'Po',
                    2 => 'Ut',
                    3 => 'St',
                    4 => 'št',
                    5 => 'Pi',
                    6 => 'So',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'N',
                    1 => 'P',
                    2 => 'U',
                    3 => 'S',
                    4 => 'š',
                    5 => 'P',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Nedeľa',
                    1 => 'Pondelok',
                    2 => 'Utorok',
                    3 => 'Streda',
                    4 => 'štvrtok',
                    5 => 'Piatok',
                    6 => 'Sobota',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# rok} one {# rok} one {# roku} one {# roka} one {# rokom} one {# roku} few {# roky} few {# roky} few {# rokom} few {# rokov} few {# rokmi} few {# rokoch} many {# roka} many {# roka} many {# roka} many {# roka} many {# roka} many {# roka} other {# rokov} other {# rokov} other {# rokom} other {# rokov} other {# rokmi} other {# rokoch}}',
            'month'       => '{n, plural, one {# mesiac} one {# mesiac} one {# mesiacu} one {# mesiaca} one {# mesiacom} one {# mesiaci} few {# mesiace} few {# mesiace} few {# mesiacom} few {# mesiacov} few {# mesiacmi} few {# mesiacoch} many {# mesiaca} many {# mesiaca} many {# mesiaca} many {# mesiaca} many {# mesiaca} many {# mesiaca} other {# mesiacov} other {# mesiacov} other {# mesiacom} other {# mesiacov} other {# mesiacmi} other {# mesiacoch}}',
            'week'        => '{n, plural, one {# týždeň} one {# týždeň} one {# týždňu} one {# týždňa} one {# týždňom} one {# týždni} few {# týždne} few {# týždne} few {# týždňom} few {# týždňov} few {# týždňami} few {# týždňoch} many {# týždňa} many {# týždňa} many {# týždňa} many {# týždňa} many {# týždňa} many {# týždňa} other {# týždňov} other {# týždňov} other {# týždňom} other {# týždňov} other {# týždňami} other {# týždňoch}}',
            'day'         => '{n, plural, one {# deň} one {# deň} one {# dňu} one {# dňa} one {# dňom} one {# dni} few {# dni} few {# dni} few {# dňom} few {# dní} few {# dňami} few {# dňoch} many {# dňa} many {# dňa} many {# dňa} many {# dňa} many {# dňa} many {# dňa} other {# dní} other {# dní} other {# dňom} other {# dní} other {# dňami} other {# dňoch}}',
            'hour'        => '{n, plural, one {# h} few {# h} many {# h} other {# h}}',
            'minute'      => '{n, plural, one {# min} few {# min} many {# min} other {# min}}',
            'second'      => '{n, plural, one {# s} few {# s} many {# s} other {# s}}',
            'millisecond' => '{n, plural, one {# ms} few {# ms} many {# ms} other {# ms}}',
            'microsecond' => '{n, plural, one {# μs} few {# μs} many {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, one {# ns} few {# ns} many {# ns} other {# ns}}',
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
