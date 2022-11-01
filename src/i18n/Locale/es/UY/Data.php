<?php

declare(strict_types=1);

/**
 * Locale data for 'es-UY'.
 * Created: Tue, 01 Nov 2022 12:00:22 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_es_UY_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '(¤ %f)';
        $this->language = 'es';
        $this->locale = 'es-UY';
        $this->firstDayWeek = 1;
        $this->longDate = 'j \\d\\e F \\d\\e Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'a. m.';
        $this->pmString = 'p. m.';
        $this->nameEnglish = 'Spanish (Uruguay)';
        $this->nameNative = 'Español (Uruguay)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Ene.',
                    2  => 'Feb.',
                    3  => 'Mar.',
                    4  => 'Abr.',
                    5  => 'May.',
                    6  => 'Jun.',
                    7  => 'Jul.',
                    8  => 'Ago.',
                    9  => 'Set.',
                    10 => 'Oct.',
                    11 => 'Nov.',
                    12 => 'Dic.',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Enero',
                    2  => 'Febrero',
                    3  => 'Marzo',
                    4  => 'Abril',
                    5  => 'Mayo',
                    6  => 'Junio',
                    7  => 'Julio',
                    8  => 'Agosto',
                    9  => 'Setiembre',
                    10 => 'Octubre',
                    11 => 'Noviembre',
                    12 => 'Diciembre',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'E',
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
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Dom',
                    1 => 'Lun',
                    2 => 'Mar',
                    3 => 'Mié',
                    4 => 'Jue',
                    5 => 'Vie',
                    6 => 'Sáb',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'D',
                    1 => 'L',
                    2 => 'M',
                    3 => 'X',
                    4 => 'J',
                    5 => 'V',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Domingo',
                    1 => 'Lunes',
                    2 => 'Martes',
                    3 => 'Miércoles',
                    4 => 'Jueves',
                    5 => 'Viernes',
                    6 => 'Sábado',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# año} other {# años}}',
            'month'       => '{n, plural, one {# mes} other {# meses}}',
            'week'        => '{n, plural, one {# semana} other {# semanas}}',
            'day'         => '{n, plural, one {# día} other {# días}}',
            'hour'        => '{n, plural, one {# h} other {# h}}',
            'minute'      => '{n, plural, one {# min} other {# min}}',
            'second'      => '{n, plural, one {# s} other {# s}}',
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
