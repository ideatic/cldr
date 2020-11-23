<?php

declare(strict_types=1);

/**
 * Locale data for 'az-Cyrl'.
 * Created: Sun, 22 Nov 2020 20:20:24 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_az_Cyrl_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'az';
        $this->locale = 'az-Cyrl';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'АМ';
        $this->pmString = 'ПМ';
        $this->nameEnglish = 'Azeri';
        $this->nameNative = 'Azəri';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'јан',
                    2  => 'фев',
                    3  => 'мар',
                    4  => 'апр',
                    5  => 'май',
                    6  => 'ијн',
                    7  => 'ијл',
                    8  => 'авг',
                    9  => 'сен',
                    10 => 'окт',
                    11 => 'ној',
                    12 => 'дек',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'јанвар',
                    2  => 'феврал',
                    3  => 'март',
                    4  => 'апрел',
                    5  => 'май',
                    6  => 'ијун',
                    7  => 'ијул',
                    8  => 'август',
                    9  => 'сентјабр',
                    10 => 'октјабр',
                    11 => 'нојабр',
                    12 => 'декабр',
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
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Б.',
                    1 => 'Б.Е.',
                    2 => 'Ч.А.',
                    3 => 'Ч.',
                    4 => 'Ҹ.А.',
                    5 => 'Ҹ.',
                    6 => 'Ш.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => '7',
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                    6 => '6',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'базар',
                    1 => 'базар ертәси',
                    2 => 'чәршәнбә ахшамы',
                    3 => 'чәршәнбә',
                    4 => 'ҹүмә ахшамы',
                    5 => 'ҹүмә',
                    6 => 'шәнбә',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# il} other {# il}}',
            'month'       => '{n, plural, one {# ay} other {# ay}}',
            'week'        => '{n, plural, one {# həftə} other {# həftə}}',
            'day'         => '{n, plural, one {# gün} other {# gün}}',
            'hour'        => '{n, plural, one {# saat} other {# saat}}',
            'minute'      => '{n, plural, one {# dəq} other {# dəq}}',
            'second'      => '{n, plural, one {# san} other {# san}}',
            'millisecond' => '{n, plural, one {# msan} other {# msan}}',
            'microsecond' => '{n, plural, one {# μsan} other {# μsan}}',
            'nanosecond'  => '{n, plural, one {# nsan} other {# nsan}}',
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
