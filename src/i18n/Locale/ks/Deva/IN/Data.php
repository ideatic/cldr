<?php

declare(strict_types=1);

/**
 * Locale data for 'ks-Deva-IN'.
 * Created: Tue, 01 Nov 2022 12:00:27 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ks_Deva_IN_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ks';
        $this->locale = 'ks-Deva-IN';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'A g:i:s';
        $this->shortTime = 'A g:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'ये एम';
        $this->pmString = 'पी एम';
        $this->nameEnglish = 'Kashmiri';
        $this->nameNative = 'کٲشُر';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'ज',
                    2  => 'फ़',
                    3  => 'म',
                    4  => 'अ',
                    5  => 'म',
                    6  => 'ज',
                    7  => 'ज',
                    8  => 'अ',
                    9  => 'स',
                    10 => 'ओ',
                    11 => 'न',
                    12 => 'द',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'जनवरी',
                    2  => 'फ़रवरी',
                    3  => 'मार्च',
                    4  => 'अप्रैल',
                    5  => 'मे',
                    6  => 'जून',
                    7  => 'जुलाई',
                    8  => 'अगस्त',
                    9  => 'सतुंबर',
                    10 => 'अकतुम्बर',
                    11 => 'नवूमबर',
                    12 => 'दसूमबर',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'जनवरी',
                    2  => 'फ़रवरी',
                    3  => 'मार्च',
                    4  => 'अप्रैल',
                    5  => 'मे',
                    6  => 'जून',
                    7  => 'जुलाई',
                    8  => 'अगस्त',
                    9  => 'सतुंबर',
                    10 => 'अकतुम्बर',
                    11 => 'नवूमबर',
                    12 => 'दसूमबर',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'अ',
                    1 => 'च',
                    2 => 'ब',
                    3 => 'ब',
                    4 => 'ब',
                    5 => 'ज',
                    6 => 'ब',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'आथवार',
                    1 => 'चंदिरवार',
                    2 => 'बुवार',
                    3 => 'बोदवार',
                    4 => 'ब्रेसवार',
                    5 => 'जुम्मा',
                    6 => 'बटवार',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'آتھوار',
                    1 => 'ژٔندٕروار',
                    2 => 'بۆموار',
                    3 => 'بودوار',
                    4 => 'برؠسوار',
                    5 => 'جُمہ',
                    6 => 'بٹوار',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# ؤری} other {# ؤری}}',
            'month'       => '{n, plural, one {# ریتھ} other {# ریتھ}}',
            'week'        => '{n, plural, one {# ہَفتہٕ} other {# ہَفتہٕ}}',
            'day'         => '{n, plural, one {# دۄہ} other {# دۄہ}}',
            'hour'        => '{n, plural, one {# hr} other {# hr}}',
            'minute'      => '{n, plural, one {# min} other {# min}}',
            'second'      => '{n, plural, one {# sec} other {# sec}}',
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