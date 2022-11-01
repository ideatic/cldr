<?php

declare(strict_types=1);

/**
 * Locale data for 'ha'.
 * Created: Tue, 01 Nov 2022 12:00:24 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ha_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ha';
        $this->locale = 'ha';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F, Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'Safiya';
        $this->pmString = 'Yamma';
        $this->nameEnglish = 'Hausa';
        $this->nameNative = 'Hausa';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Jan',
                    2  => 'Fab',
                    3  => 'Mar',
                    4  => 'Afi',
                    5  => 'May',
                    6  => 'Yun',
                    7  => 'Yul',
                    8  => 'Agu',
                    9  => 'Sat',
                    10 => 'Okt',
                    11 => 'Nuw',
                    12 => 'Dis',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'J',
                    2  => 'F',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'Y',
                    7  => 'Y',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Janairu',
                    2  => 'Faburairu',
                    3  => 'Maris',
                    4  => 'Afirilu',
                    5  => 'Mayu',
                    6  => 'Yuni',
                    7  => 'Yuli',
                    8  => 'Agusta',
                    9  => 'Satumba',
                    10 => 'Oktoba',
                    11 => 'Nuwamba',
                    12 => 'Disamba',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Lah',
                    1 => 'Lit',
                    2 => 'Tal',
                    3 => 'Lar',
                    4 => 'Alh',
                    5 => 'Jum',
                    6 => 'Asa',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'L',
                    1 => 'L',
                    2 => 'T',
                    3 => 'L',
                    4 => 'A',
                    5 => 'J',
                    6 => 'A',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Lahadi',
                    1 => 'Litinin',
                    2 => 'Talata',
                    3 => 'Laraba',
                    4 => 'Alhamis',
                    5 => 'Jummaʼa',
                    6 => 'Asabar',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {shekara #} other {shekaru #}}',
            'month'       => '{n, plural, one {wata #} other {watanni #}}',
            'week'        => '{n, plural, one {mako #} other {makonni #}}',
            'day'         => '{n, plural, one {rana #} other {ranaku #}}',
            'hour'        => '{n, plural, one {s #} other {s #}}',
            'minute'      => '{n, plural, one {mnt #} other {mnt #}}',
            'second'      => '{n, plural, one {d #} other {d #}}',
            'millisecond' => '{n, plural, one {ms #} other {ms #}}',
            'microsecond' => '{n, plural, one {μs #} other {μs #}}',
            'nanosecond'  => '{n, plural, one {ns #} other {ns #}}',
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
