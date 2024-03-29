<?php

declare(strict_types=1);

/**
 * Locale data for 'ja-JP'.
 * Created: Tue, 01 Nov 2022 12:00:26 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ja_JP_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ja';
        $this->locale = 'ja-JP';
        $this->firstDayWeek = 0;
        $this->longDate = 'Y年n月j日';
        $this->shortDate = 'Y/m/d';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date% %time%';
        $this->amString = '午前';
        $this->pmString = '午後';
        $this->nameEnglish = 'Japanese (Japan)';
        $this->nameNative = '日本語 (日本)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => '1月',
                    2  => '2月',
                    3  => '3月',
                    4  => '4月',
                    5  => '5月',
                    6  => '6月',
                    7  => '7月',
                    8  => '8月',
                    9  => '9月',
                    10 => '10月',
                    11 => '11月',
                    12 => '12月',
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
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => '1月',
                    2  => '2月',
                    3  => '3月',
                    4  => '4月',
                    5  => '5月',
                    6  => '6月',
                    7  => '7月',
                    8  => '8月',
                    9  => '9月',
                    10 => '10月',
                    11 => '11月',
                    12 => '12月',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => '日',
                    1 => '月',
                    2 => '火',
                    3 => '水',
                    4 => '木',
                    5 => '金',
                    6 => '土',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => '日',
                    1 => '月',
                    2 => '火',
                    3 => '水',
                    4 => '木',
                    5 => '金',
                    6 => '土',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => '日曜日',
                    1 => '月曜日',
                    2 => '火曜日',
                    3 => '水曜日',
                    4 => '木曜日',
                    5 => '金曜日',
                    6 => '土曜日',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, other {# 年}}',
            'month'       => '{n, plural, other {# か月}}',
            'week'        => '{n, plural, other {# 週間}}',
            'day'         => '{n, plural, other {# 日}}',
            'hour'        => '{n, plural, other {# 時間}}',
            'minute'      => '{n, plural, other {# 分}}',
            'second'      => '{n, plural, other {# 秒}}',
            'millisecond' => '{n, plural, other {# ms}}',
            'microsecond' => '{n, plural, other {# μs}}',
            'nanosecond'  => '{n, plural, other {# ns}}',
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
