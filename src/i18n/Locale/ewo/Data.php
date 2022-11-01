<?php

declare(strict_types=1);

/**
 * Locale data for 'ewo'.
 * Created: Tue, 01 Nov 2022 12:00:22 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ewo_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ewo';
        $this->locale = 'ewo';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'kíkíríg';
        $this->pmString = 'ngəgógəle';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'O',
                    2  => 'B',
                    3  => 'L',
                    4  => 'N',
                    5  => 'T',
                    6  => 'S',
                    7  => 'Z',
                    8  => 'M',
                    9  => 'E',
                    10 => 'A',
                    11 => 'D',
                    12 => 'B',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Ngo',
                    2  => 'Ngb',
                    3  => 'Ngl',
                    4  => 'Ngn',
                    5  => 'Ngt',
                    6  => 'Ngs',
                    7  => 'Ngz',
                    8  => 'Ngm',
                    9  => 'Nge',
                    10 => 'Nga',
                    11 => 'Ngad',
                    12 => 'Ngab',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Ngɔn osú',
                    2  => 'Ngɔn bɛ̌',
                    3  => 'Ngɔn lála',
                    4  => 'Ngɔn nyina',
                    5  => 'Ngɔn tána',
                    6  => 'Ngɔn saməna',
                    7  => 'Ngɔn zamgbála',
                    8  => 'Ngɔn mwom',
                    9  => 'Ngɔn ebulú',
                    10 => 'Ngɔn awóm',
                    11 => 'Ngɔn awóm ai dziá',
                    12 => 'Ngɔn awóm ai bɛ̌',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'S',
                    3 => 'S',
                    4 => 'S',
                    5 => 'F',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Sɔ́n',
                    1 => 'Mɔ́n',
                    2 => 'Smb',
                    3 => 'Sml',
                    4 => 'Smn',
                    5 => 'Fúl',
                    6 => 'Sér',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Sɔ́ndɔ',
                    1 => 'Mɔ́ndi',
                    2 => 'Sɔ́ndɔ məlú mə́bɛ̌',
                    3 => 'Sɔ́ndɔ məlú mə́lɛ́',
                    4 => 'Sɔ́ndɔ məlú mə́nyi',
                    5 => 'Fúladé',
                    6 => 'Séradé',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# year} other {# years}}',
            'month'       => '{n, plural, one {# month} other {# months}}',
            'week'        => '{n, plural, one {# week} other {# weeks}}',
            'day'         => '{n, plural, one {# day} other {# days}}',
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
