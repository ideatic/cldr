<?php

declare(strict_types=1);

/**
 * Locale data for 'am-ET'.
 * Created: Tue, 01 Nov 2022 12:00:18 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_am_ET_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'am';
        $this->locale = 'am-ET';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ጥዋት';
        $this->pmString = 'ከሰዓት';
        $this->nameEnglish = 'Amharic (Ethiopia)';
        $this->nameNative = 'አማርኛ (ኢትዮጵያ)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'ጃንዩ',
                    2  => 'ፌብሩ',
                    3  => 'ማርች',
                    4  => 'ኤፕሪ',
                    5  => 'ሜይ',
                    6  => 'ጁን',
                    7  => 'ጁላይ',
                    8  => 'ኦገስ',
                    9  => 'ሴፕቴ',
                    10 => 'ኦክቶ',
                    11 => 'ኖቬም',
                    12 => 'ዲሴም',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'ጃ',
                    2  => 'ፌ',
                    3  => 'ማ',
                    4  => 'ኤ',
                    5  => 'ሜ',
                    6  => 'ጁ',
                    7  => 'ጁ',
                    8  => 'ኦ',
                    9  => 'ሴ',
                    10 => 'ኦ',
                    11 => 'ኖ',
                    12 => 'ዲ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'ጃንዩወሪ',
                    2  => 'ፌብሩወሪ',
                    3  => 'ማርች',
                    4  => 'ኤፕሪል',
                    5  => 'ሜይ',
                    6  => 'ጁን',
                    7  => 'ጁላይ',
                    8  => 'ኦገስት',
                    9  => 'ሴፕቴምበር',
                    10 => 'ኦክቶበር',
                    11 => 'ኖቬምበር',
                    12 => 'ዲሴምበር',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'እሑድ',
                    1 => 'ሰኞ',
                    2 => 'ማክሰ',
                    3 => 'ረቡዕ',
                    4 => 'ሐሙስ',
                    5 => 'ዓርብ',
                    6 => 'ቅዳሜ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'እ',
                    1 => 'ሰ',
                    2 => 'ማ',
                    3 => 'ረ',
                    4 => 'ሐ',
                    5 => 'ዓ',
                    6 => 'ቅ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'እሑድ',
                    1 => 'ሰኞ',
                    2 => 'ማክሰኞ',
                    3 => 'ረቡዕ',
                    4 => 'ሐሙስ',
                    5 => 'ዓርብ',
                    6 => 'ቅዳሜ',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# ዓመት} one {# ዓመት} other {# ዓመታት} other {# ዓመታት}}',
            'month'       => '{n, plural, one {# ወር} one {# ወር} other {# ወራት} other {# ወራት}}',
            'week'        => '{n, plural, one {# ሳምንት} one {# ሳምንት} other {# ሳምንታት} other {# ሳምንታት}}',
            'day'         => '{n, plural, one {# ቀናት} one {# ቀናት} other {# ቀናት} other {# ቀናት}}',
            'hour'        => '{n, plural, one {# ሰዓ} other {# ሰዓ}}',
            'minute'      => '{n, plural, one {# ደቂ} other {# ደቂቃ}}',
            'second'      => '{n, plural, one {# ሰከ} other {# ሰከ}}',
            'millisecond' => '{n, plural, one {# ሚሴ} other {# ሚሴ}}',
            'microsecond' => '{n, plural, one {# ማሰ} other {# ማሰ}}',
            'nanosecond'  => '{n, plural, one {# ናኖሰከንድ} other {# ናኖሰከንድ}}',
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
