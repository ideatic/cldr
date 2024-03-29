<?php

declare(strict_types=1);

/**
 * Locale data for 'mr-IN'.
 * Created: Tue, 01 Nov 2022 12:00:29 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_mr_IN_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'mr';
        $this->locale = 'mr-IN';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F, Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Marathi (India)';
        $this->nameNative = 'मराठी (भारत)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'जाने',
                    2  => 'फेब्रु',
                    3  => 'मार्च',
                    4  => 'एप्रि',
                    5  => 'मे',
                    6  => 'जून',
                    7  => 'जुलै',
                    8  => 'ऑग',
                    9  => 'सप्टें',
                    10 => 'ऑक्टो',
                    11 => 'नोव्हें',
                    12 => 'डिसें',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'जा',
                    2  => 'फे',
                    3  => 'मा',
                    4  => 'ए',
                    5  => 'मे',
                    6  => 'जू',
                    7  => 'जु',
                    8  => 'ऑ',
                    9  => 'स',
                    10 => 'ऑ',
                    11 => 'नो',
                    12 => 'डि',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'जानेवारी',
                    2  => 'फेब्रुवारी',
                    3  => 'मार्च',
                    4  => 'एप्रिल',
                    5  => 'मे',
                    6  => 'जून',
                    7  => 'जुलै',
                    8  => 'ऑगस्ट',
                    9  => 'सप्टेंबर',
                    10 => 'ऑक्टोबर',
                    11 => 'नोव्हेंबर',
                    12 => 'डिसेंबर',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'रवि',
                    1 => 'सोम',
                    2 => 'मंगळ',
                    3 => 'बुध',
                    4 => 'गुरु',
                    5 => 'शुक्र',
                    6 => 'शनि',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'र',
                    1 => 'सो',
                    2 => 'मं',
                    3 => 'बु',
                    4 => 'गु',
                    5 => 'शु',
                    6 => 'श',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'रविवार',
                    1 => 'सोमवार',
                    2 => 'मंगळवार',
                    3 => 'बुधवार',
                    4 => 'गुरुवार',
                    5 => 'शुक्रवार',
                    6 => 'शनिवार',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# वर्ष} one {# वर्षापासून} one {# वर्षास} one {# वर्षाला} one {# वर्षाने} one {# वर्षाचा} one {# वर्षाशी} other {# वर्षे} other {# वर्षांपासून} other {# वर्षांना} other {# वर्षांसाठी} other {# वर्षांनी} other {# वर्षांचे} other {# वर्षांचा}}',
            'month'       => '{n, plural, one {# महिना} one {# महिन्यापासून} one {# महिन्यास} one {# महिन्याला} one {# महिन्याने} one {# महिन्याचा} one {# महिन्याशी} other {# महिने} other {# महिन्यांपासून} other {# महिन्यांना} other {# महिन्यांसाठी} other {# महिन्यांनी} other {# महिन्यांचे} other {# महिन्यांचा}}',
            'week'        => '{n, plural, one {# आठवडा} one {# आठवड्यापासून} one {# आठवड्यास} one {# आठवड्याला} one {# आठवड्याने} one {# आठवड्याचा} one {# आठवड्याशी} other {# आठवडे} other {# आठवड्यांपासून} other {# आठवड्यांना} other {# आठवड्यांसाठी} other {# आठवड्यांनी} other {# आठवड्यांचे} other {# आठवड्यांचा}}',
            'day'         => '{n, plural, one {# दिवस} one {# दिवसाहून} one {# दिवसास} one {# दिवसाने} one {# दिवसाशी} one {# दिवसाची} one {# दिवसा} other {# दिवस} other {# दिवसांहून} other {# दिवसांनी} other {# दिवसांना} other {# दिवसांशी} other {# दिवसांचे} other {# दिवसांच्या}}',
            'hour'        => '{n, plural, one {# ता} other {# ता}}',
            'minute'      => '{n, plural, one {# मिनि} other {# मिनि}}',
            'second'      => '{n, plural, one {# से} other {# से}}',
            'millisecond' => '{n, plural, one {# मिलिसे} other {# मिलिसे}}',
            'microsecond' => '{n, plural, one {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, one {# नॅसे} other {# नॅसे}}',
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
