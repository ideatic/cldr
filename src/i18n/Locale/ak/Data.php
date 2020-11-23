<?php

declare(strict_types=1);

/**
 * Locale data for 'ak'.
 * Created: Sun, 22 Nov 2020 20:20:21 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ak_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ak';
        $this->locale = 'ak';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AN';
        $this->pmString = 'EW';
        $this->nameEnglish = 'Akan';
        $this->nameNative = 'Akan';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'S-Ɔ',
                    2  => 'K-Ɔ',
                    3  => 'E-Ɔ',
                    4  => 'E-O',
                    5  => 'E-K',
                    6  => 'O-A',
                    7  => 'A-K',
                    8  => 'D-Ɔ',
                    9  => 'F-Ɛ',
                    10 => 'Ɔ-A',
                    11 => 'Ɔ-O',
                    12 => 'M-Ɔ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Sanda-Ɔpɛpɔn',
                    2  => 'Kwakwar-Ɔgyefuo',
                    3  => 'Ebɔw-Ɔbenem',
                    4  => 'Ebɔbira-Oforisuo',
                    5  => 'Esusow Aketseaba-Kɔtɔnimba',
                    6  => 'Obirade-Ayɛwohomumu',
                    7  => 'Ayɛwoho-Kitawonsa',
                    8  => 'Difuu-Ɔsandaa',
                    9  => 'Fankwa-Ɛbɔ',
                    10 => 'Ɔbɛsɛ-Ahinime',
                    11 => 'Ɔberɛfɛw-Obubuo',
                    12 => 'Mumu-Ɔpɛnimba',
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
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'K',
                    1 => 'D',
                    2 => 'B',
                    3 => 'W',
                    4 => 'Y',
                    5 => 'F',
                    6 => 'M',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Kwe',
                    1 => 'Dwo',
                    2 => 'Ben',
                    3 => 'Wuk',
                    4 => 'Yaw',
                    5 => 'Fia',
                    6 => 'Mem',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Kwesida',
                    1 => 'Dwowda',
                    2 => 'Benada',
                    3 => 'Wukuda',
                    4 => 'Yawda',
                    5 => 'Fida',
                    6 => 'Memeneda',
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
            'microsecond' => '{n, plural, one {# µs} other {# µs}}',
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