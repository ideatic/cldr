<?php

declare(strict_types=1);

/**
 * Locale data for 'th'.
 * Created: Tue, 01 Nov 2022 12:00:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_th_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'th';
        $this->locale = 'th';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F  Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ก่อนเที่ยง';
        $this->pmString = 'หลังเที่ยง';
        $this->nameEnglish = 'Thai';
        $this->nameNative = 'ไทย';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'ม.ค.',
                    2  => 'ก.พ.',
                    3  => 'มี.ค.',
                    4  => 'เม.ย.',
                    5  => 'พ.ค.',
                    6  => 'มิ.ย.',
                    7  => 'ก.ค.',
                    8  => 'ส.ค.',
                    9  => 'ก.ย.',
                    10 => 'ต.ค.',
                    11 => 'พ.ย.',
                    12 => 'ธ.ค.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'ม.ค.',
                    2  => 'ก.พ.',
                    3  => 'มี.ค.',
                    4  => 'เม.ย.',
                    5  => 'พ.ค.',
                    6  => 'มิ.ย.',
                    7  => 'ก.ค.',
                    8  => 'ส.ค.',
                    9  => 'ก.ย.',
                    10 => 'ต.ค.',
                    11 => 'พ.ย.',
                    12 => 'ธ.ค.',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'มกราคม',
                    2  => 'กุมภาพันธ์',
                    3  => 'มีนาคม',
                    4  => 'เมษายน',
                    5  => 'พฤษภาคม',
                    6  => 'มิถุนายน',
                    7  => 'กรกฎาคม',
                    8  => 'สิงหาคม',
                    9  => 'กันยายน',
                    10 => 'ตุลาคม',
                    11 => 'พฤศจิกายน',
                    12 => 'ธันวาคม',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'อา.',
                    1 => 'จ.',
                    2 => 'อ.',
                    3 => 'พ.',
                    4 => 'พฤ.',
                    5 => 'ศ.',
                    6 => 'ส.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'อา',
                    1 => 'จ',
                    2 => 'อ',
                    3 => 'พ',
                    4 => 'พฤ',
                    5 => 'ศ',
                    6 => 'ส',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'วันอาทิตย์',
                    1 => 'วันจันทร์',
                    2 => 'วันอังคาร',
                    3 => 'วันพุธ',
                    4 => 'วันพฤหัสบดี',
                    5 => 'วันศุกร์',
                    6 => 'วันเสาร์',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, other {# ปี}}',
            'month'       => '{n, plural, other {# เดือน}}',
            'week'        => '{n, plural, other {# สัปดาห์}}',
            'day'         => '{n, plural, other {# วัน}}',
            'hour'        => '{n, plural, other {# ชม.}}',
            'minute'      => '{n, plural, other {# นาที}}',
            'second'      => '{n, plural, other {# วิ}}',
            'millisecond' => '{n, plural, other {# มิลลิวินาที}}',
            'microsecond' => '{n, plural, other {# ไมโครวิ}}',
            'nanosecond'  => '{n, plural, other {# นาโนวิ}}',
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
