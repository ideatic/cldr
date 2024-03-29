<?php

declare(strict_types=1);

/**
 * Locale data for 'chr-US'.
 * Created: Tue, 01 Nov 2022 12:00:19 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_chr_US_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'chr';
        $this->locale = 'chr-US';
        $this->firstDayWeek = 0;
        $this->longDate = 'F j, Y';
        $this->shortDate = 'M j, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'ᏌᎾᎴ';
        $this->pmString = 'ᏒᎯᏱᎢᏗᏢ';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'ᎤᏃ',
                    2  => 'ᎧᎦ',
                    3  => 'ᎠᏅ',
                    4  => 'ᎧᏬ',
                    5  => 'ᎠᏂ',
                    6  => 'ᏕᎭ',
                    7  => 'ᎫᏰ',
                    8  => 'ᎦᎶ',
                    9  => 'ᏚᎵ',
                    10 => 'ᏚᏂ',
                    11 => 'ᏅᏓ',
                    12 => 'ᎥᏍ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'Ꭴ',
                    2  => 'Ꭷ',
                    3  => 'Ꭰ',
                    4  => 'Ꭷ',
                    5  => 'Ꭰ',
                    6  => 'Ꮥ',
                    7  => 'Ꭻ',
                    8  => 'Ꭶ',
                    9  => 'Ꮪ',
                    10 => 'Ꮪ',
                    11 => 'Ꮕ',
                    12 => 'Ꭵ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'ᎤᏃᎸᏔᏅ',
                    2  => 'ᎧᎦᎵ',
                    3  => 'ᎠᏅᏱ',
                    4  => 'ᎧᏬᏂ',
                    5  => 'ᎠᏂᏍᎬᏘ',
                    6  => 'ᏕᎭᎷᏱ',
                    7  => 'ᎫᏰᏉᏂ',
                    8  => 'ᎦᎶᏂ',
                    9  => 'ᏚᎵᏍᏗ',
                    10 => 'ᏚᏂᏅᏗ',
                    11 => 'ᏅᏓᏕᏆ',
                    12 => 'ᎥᏍᎩᏱ',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'ᏆᏍᎬ',
                    1 => 'ᏉᏅᎯ',
                    2 => 'ᏔᎵᏁ',
                    3 => 'ᏦᎢᏁ',
                    4 => 'ᏅᎩᏁ',
                    5 => 'ᏧᎾᎩ',
                    6 => 'ᏈᏕᎾ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'Ꮖ',
                    1 => 'Ꮙ',
                    2 => 'Ꮤ',
                    3 => 'Ꮶ',
                    4 => 'Ꮕ',
                    5 => 'Ꮷ',
                    6 => 'Ꭴ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'ᎤᎾᏙᏓᏆᏍᎬ',
                    1 => 'ᎤᎾᏙᏓᏉᏅᎯ',
                    2 => 'ᏔᎵᏁᎢᎦ',
                    3 => 'ᏦᎢᏁᎢᎦ',
                    4 => 'ᏅᎩᏁᎢᎦ',
                    5 => 'ᏧᎾᎩᎶᏍᏗ',
                    6 => 'ᎤᎾᏙᏓᏈᏕᎾ',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# ᎤᏕᏘᏴᏌᏗᏒᎢ} other {# ᏧᏕᏘᏴᏌᏗᏒᎢ}}',
            'month'       => '{n, plural, one {# ᎧᎸᎢ} other {# ᏗᎧᎸᎢ}}',
            'week'        => '{n, plural, one {# ᏒᎾᏙᏓᏆᏍᏗ} other {# ᎢᏳᎾᏙᏓᏆᏍᏗ}}',
            'day'         => '{n, plural, one {# ᎢᎦ} other {# ᎯᎸᏍᎩ ᏧᏒᎯᏓ}}',
            'hour'        => '{n, plural, one {# ᏑᏟ} other {# ᏑᏟ}}',
            'minute'      => '{n, plural, one {# ᎢᏯᏔ} other {# ᎢᏯᏔ}}',
            'second'      => '{n, plural, one {# ᎠᏎᏢ} other {# ᎠᏎᏢ}}',
            'millisecond' => '{n, plural, one {# ᏌᎠ} other {# ᏌᎠ}}',
            'microsecond' => '{n, plural, one {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, one {# ᎾᏃ} other {# ᎾᏃ}}',
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
