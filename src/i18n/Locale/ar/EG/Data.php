<?php

declare(strict_types=1);

/**
 * Locale data for 'ar-EG'.
 * Created: Tue, 01 Nov 2022 12:00:18 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ar_EG_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '؜%f¤';
        $this->currencyNegativeFormat = '(؜%f¤)';
        $this->language = 'ar';
        $this->locale = 'ar-EG';
        $this->firstDayWeek = 6;
        $this->longDate = 'j F Y';
        $this->shortDate = 'd‏/m‏/Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%، %time%';
        $this->amString = 'ص';
        $this->pmString = 'م';
        $this->nameEnglish = 'Arabic (Egypt)';
        $this->nameNative = 'العربية (مصر)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'يناير',
                    2  => 'فبراير',
                    3  => 'مارس',
                    4  => 'أبريل',
                    5  => 'مايو',
                    6  => 'يونيو',
                    7  => 'يوليو',
                    8  => 'أغسطس',
                    9  => 'سبتمبر',
                    10 => 'أكتوبر',
                    11 => 'نوفمبر',
                    12 => 'ديسمبر',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'ي',
                    2  => 'ف',
                    3  => 'م',
                    4  => 'أ',
                    5  => 'و',
                    6  => 'ن',
                    7  => 'ل',
                    8  => 'غ',
                    9  => 'س',
                    10 => 'ك',
                    11 => 'ب',
                    12 => 'د',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'يناير',
                    2  => 'فبراير',
                    3  => 'مارس',
                    4  => 'أبريل',
                    5  => 'مايو',
                    6  => 'يونيو',
                    7  => 'يوليو',
                    8  => 'أغسطس',
                    9  => 'سبتمبر',
                    10 => 'أكتوبر',
                    11 => 'نوفمبر',
                    12 => 'ديسمبر',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'الأحد',
                    1 => 'الاثنين',
                    2 => 'الثلاثاء',
                    3 => 'الأربعاء',
                    4 => 'الخميس',
                    5 => 'الجمعة',
                    6 => 'السبت',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'ح',
                    1 => 'ن',
                    2 => 'ث',
                    3 => 'ر',
                    4 => 'خ',
                    5 => 'ج',
                    6 => 'س',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'الأحد',
                    1 => 'الاثنين',
                    2 => 'الثلاثاء',
                    3 => 'الأربعاء',
                    4 => 'الخميس',
                    5 => 'الجمعة',
                    6 => 'السبت',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, zero {# سنة} one {سنة} two {سنتان} few {# سنوات} many {# سنة} other {# سنة}}',
            'month'       => '{n, plural, zero {# شهر} one {شهر} two {شهران} few {# أشهر} many {# شهرًا} other {# شهر}}',
            'week'        => '{n, plural, zero {# أسبوع} one {أسبوع} two {أسبوعان} few {# أسابيع} many {# أسبوعًا} other {# أسبوع}}',
            'day'         => '{n, plural, zero {# يوم} one {يوم} two {يومان} few {# أيام} many {# يومًا} other {# يوم}}',
            'hour'        => '{n, plural, zero {# س} one {# س} two {# س} few {# س} many {# س} other {# س}}',
            'minute'      => '{n, plural, zero {# د} one {# د} two {# د} few {# د} many {# د} other {# د}}',
            'second'      => '{n, plural, zero {# ث} one {# ث} two {# ث} few {# ث} many {# ث} other {# ث}}',
            'millisecond' => '{n, plural, zero {# ملي ث} one {# ملي ث} two {# ملي ث} few {# ملي ث} many {# ملي ث} other {# ملي ث}}',
            'microsecond' => '{n, plural, zero {# م.ث.} one {# م.ث.} two {# م.ث.} few {# م.ث.} many {# م.ث.} other {# م.ث.}}',
            'nanosecond'  => '{n, plural, zero {# ن.ث.} one {# ن.ث.} two {# ن.ث.} few {# ن.ث.} many {# ن.ث.} other {# ن.ث.}}',
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
