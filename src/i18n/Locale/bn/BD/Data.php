<?php

declare(strict_types=1);

/**
 * Locale data for 'bn-BD'.
 * Created: Tue, 01 Nov 2022 12:00:19 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_bn_BD_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '#,%f¤';
        $this->currencyNegativeFormat = '(#,%f¤)';
        $this->language = 'bn';
        $this->locale = 'bn-BD';
        $this->firstDayWeek = 5;
        $this->longDate = 'j F, Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Bangla (Bangladesh)';
        $this->nameNative = 'বাংলা (বাংলাদেশ)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'জানু',
                    2  => 'ফেব',
                    3  => 'মার্চ',
                    4  => 'এপ্রি',
                    5  => 'মে',
                    6  => 'জুন',
                    7  => 'জুল',
                    8  => 'আগ',
                    9  => 'সেপ',
                    10 => 'অক্টো',
                    11 => 'নভে',
                    12 => 'ডিসে',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'জা',
                    2  => 'ফে',
                    3  => 'মা',
                    4  => 'এ',
                    5  => 'মে',
                    6  => 'জুন',
                    7  => 'জু',
                    8  => 'আ',
                    9  => 'সে',
                    10 => 'অ',
                    11 => 'ন',
                    12 => 'ডি',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'জানুয়ারী',
                    2  => 'ফেব্রুয়ারী',
                    3  => 'মার্চ',
                    4  => 'এপ্রিল',
                    5  => 'মে',
                    6  => 'জুন',
                    7  => 'জুলাই',
                    8  => 'আগস্ট',
                    9  => 'সেপ্টেম্বর',
                    10 => 'অক্টোবর',
                    11 => 'নভেম্বর',
                    12 => 'ডিসেম্বর',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'রবি',
                    1 => 'সোম',
                    2 => 'মঙ্গল',
                    3 => 'বুধ',
                    4 => 'বৃহস্পতি',
                    5 => 'শুক্র',
                    6 => 'শনি',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'র',
                    1 => 'সো',
                    2 => 'ম',
                    3 => 'বু',
                    4 => 'বৃ',
                    5 => 'শু',
                    6 => 'শ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'রবিবার',
                    1 => 'সোমবার',
                    2 => 'মঙ্গলবার',
                    3 => 'বুধবার',
                    4 => 'বৃহস্পতিবার',
                    5 => 'শুক্রবার',
                    6 => 'শনিবার',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# বছর} other {# বছর}}',
            'month'       => '{n, plural, one {# মাস} other {# মাস}}',
            'week'        => '{n, plural, one {# সপ্তাহ} other {# সপ্তাহ}}',
            'day'         => '{n, plural, one {# দিন} other {# দিন}}',
            'hour'        => '{n, plural, one {# ঘন্টা} other {# ঘন্টা}}',
            'minute'      => '{n, plural, one {# মিনিট} other {# মিনিট}}',
            'second'      => '{n, plural, one {# সেকেন্ড} other {# সেকেন্ড}}',
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
