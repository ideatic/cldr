<?php

declare(strict_types=1);

/**
 * Locale data for 'vo-001'.
 * Created: Fri, 01 May 2020 17:34:57 +0200
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_vo_001_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 37
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'vo';
        $this->locale = 'vo-001';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M. j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Volapük';
        $this->nameNative = 'Volapük';
    }

    public function months($type = i18n_Locale::TYPE_WIDE)
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Yan',
                    2  => 'Feb',
                    3  => 'Mäz',
                    4  => 'Prl',
                    5  => 'May',
                    6  => 'Yun',
                    7  => 'Yul',
                    8  => 'Gst',
                    9  => 'Set',
                    10 => 'Ton',
                    11 => 'Nov',
                    12 => 'Dek',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'Y',
                    2  => 'F',
                    3  => 'M',
                    4  => 'P',
                    5  => 'M',
                    6  => 'Y',
                    7  => 'Y',
                    8  => 'G',
                    9  => 'S',
                    10 => 'T',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Yanul',
                    2  => 'Febul',
                    3  => 'Mäzul',
                    4  => 'Prilul',
                    5  => 'Mayul',
                    6  => 'Yunul',
                    7  => 'Yulul',
                    8  => 'Gustul',
                    9  => 'Setul',
                    10 => 'Tobul',
                    11 => 'Novul',
                    12 => 'Dekul',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE)
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Su.',
                    1 => 'Mu.',
                    2 => 'Tu.',
                    3 => 'Ve.',
                    4 => 'Dö.',
                    5 => 'Fr.',
                    6 => 'Zä.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'T',
                    3 => 'V',
                    4 => 'D',
                    5 => 'F',
                    6 => 'Z',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Sudel',
                    1 => 'Mudel',
                    2 => 'Tudel',
                    3 => 'Vedel',
                    4 => 'Dödel',
                    5 => 'Fridel',
                    6 => 'Zädel',
                ];
        }
    }

    public function intervals()
    {
        return [
            'year'        => '{n, plural, one {yel #} other {yels #}}',
            'month'       => '{n, plural, one {mul #} other {muls #}}',
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

    public function currencies()
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Currencies.php';
    }

    public function languages()
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Languages.php';
    }

    public function territories(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Territories.php';
    }
}
