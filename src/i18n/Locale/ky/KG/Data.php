<?php

declare(strict_types=1);

/**
 * Locale data for 'ky-KG'.
 * Created: Tue, 01 Nov 2022 12:00:27 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ky_KG_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'ky';
        $this->locale = 'ky-KG';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y-ж., j-F';
        $this->shortDate = 'Y-ж., j-M';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'таңкы';
        $this->pmString = 'түштөн кийинки';
        $this->nameEnglish = 'Kirghiz (Kyrgyzstan)';
        $this->nameNative = 'Кыргызча (Кыргызстан)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'янв.',
                    2  => 'фев.',
                    3  => 'мар.',
                    4  => 'апр.',
                    5  => 'май',
                    6  => 'июн.',
                    7  => 'июл.',
                    8  => 'авг.',
                    9  => 'сен.',
                    10 => 'окт.',
                    11 => 'ноя.',
                    12 => 'дек.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'Я',
                    2  => 'Ф',
                    3  => 'М',
                    4  => 'А',
                    5  => 'М',
                    6  => 'И',
                    7  => 'И',
                    8  => 'А',
                    9  => 'С',
                    10 => 'О',
                    11 => 'Н',
                    12 => 'Д',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'январь',
                    2  => 'февраль',
                    3  => 'март',
                    4  => 'апрель',
                    5  => 'май',
                    6  => 'июнь',
                    7  => 'июль',
                    8  => 'август',
                    9  => 'сентябрь',
                    10 => 'октябрь',
                    11 => 'ноябрь',
                    12 => 'декабрь',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'жек.',
                    1 => 'дүй.',
                    2 => 'шейш.',
                    3 => 'шарш.',
                    4 => 'бейш.',
                    5 => 'жума',
                    6 => 'ишм.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'Ж',
                    1 => 'Д',
                    2 => 'Ш',
                    3 => 'Ш',
                    4 => 'Б',
                    5 => 'Ж',
                    6 => 'И',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'жекшемби',
                    1 => 'дүйшөмбү',
                    2 => 'шейшемби',
                    3 => 'шаршемби',
                    4 => 'бейшемби',
                    5 => 'жума',
                    6 => 'ишемби',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# жыл} other {# жыл}}',
            'month'       => '{n, plural, one {# ай} other {# ай}}',
            'week'        => '{n, plural, one {# апта} other {# апта}}',
            'day'         => '{n, plural, one {# күн} other {# күн}}',
            'hour'        => '{n, plural, one {# ст} other {# ст}}',
            'minute'      => '{n, plural, one {# мүн} other {# мүн}}',
            'second'      => '{n, plural, one {# сек} other {# сек}}',
            'millisecond' => '{n, plural, one {# мсек} other {# мсек}}',
            'microsecond' => '{n, plural, one {#μс} other {#μс}}',
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
