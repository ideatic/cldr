<?php

declare(strict_types=1);

/**
 * Locale data for 'mn'.
 * Created: Tue, 01 Nov 2022 12:00:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_mn_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'mn';
        $this->locale = 'mn';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y оны Fын j';
        $this->shortDate = 'Y оны Mын j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ү.ө.';
        $this->pmString = 'ү.х.';
        $this->nameEnglish = 'Mongolian';
        $this->nameNative = 'Монгол';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => '1-р сар',
                    2  => '2-р сар',
                    3  => '3-р сар',
                    4  => '4-р сар',
                    5  => '5-р сар',
                    6  => '6-р сар',
                    7  => '7-р сар',
                    8  => '8-р сар',
                    9  => '9-р сар',
                    10 => '10-р сар',
                    11 => '11-р сар',
                    12 => '12-р сар',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'I',
                    2  => 'II',
                    3  => 'III',
                    4  => 'IV',
                    5  => 'V',
                    6  => 'VI',
                    7  => 'VII',
                    8  => 'VIII',
                    9  => 'IX',
                    10 => 'X',
                    11 => 'XI',
                    12 => 'XII',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'нэгдүгээр сар',
                    2  => 'хоёрдугаар сар',
                    3  => 'гуравдугаар сар',
                    4  => 'дөрөвдүгээр сар',
                    5  => 'тавдугаар сар',
                    6  => 'зургаадугаар сар',
                    7  => 'долоодугаар сар',
                    8  => 'наймдугаар сар',
                    9  => 'есдүгээр сар',
                    10 => 'аравдугаар сар',
                    11 => 'арван нэгдүгээр сар',
                    12 => 'арван хоёрдугаар сар',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Ня',
                    1 => 'Да',
                    2 => 'Мя',
                    3 => 'Лх',
                    4 => 'Пү',
                    5 => 'Ба',
                    6 => 'Бя',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'Ня',
                    1 => 'Да',
                    2 => 'Мя',
                    3 => 'Лх',
                    4 => 'Пү',
                    5 => 'Ба',
                    6 => 'Бя',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'ням',
                    1 => 'даваа',
                    2 => 'мягмар',
                    3 => 'лхагва',
                    4 => 'пүрэв',
                    5 => 'баасан',
                    6 => 'бямба',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# жил} other {# жил}}',
            'month'       => '{n, plural, one {# сар} other {# сар}}',
            'week'        => '{n, plural, one {# долоо хоног} other {# долоо хоног}}',
            'day'         => '{n, plural, one {# хоног} other {# хоног}}',
            'hour'        => '{n, plural, one {# цаг} other {# цаг}}',
            'minute'      => '{n, plural, one {# мин} other {# мин}}',
            'second'      => '{n, plural, one {# сек} other {# сек}}',
            'millisecond' => '{n, plural, one {# мс} other {# мс}}',
            'microsecond' => '{n, plural, one {# μсек} other {# μсек}}',
            'nanosecond'  => '{n, plural, one {# нс} other {# нс}}',
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
