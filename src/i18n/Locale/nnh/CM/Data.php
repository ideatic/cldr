<?php

declare(strict_types=1);

/**
 * Locale data for 'nnh-CM'.
 * Created: Tue, 01 Nov 2022 12:00:30 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_nnh_CM_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'nnh';
        $this->locale = 'nnh-CM';
        $this->firstDayWeek = 1;
        $this->longDate = '\\l\\y\\�\\�̌ʼ j \\n\\a F, Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'mbaʼámbaʼ';
        $this->pmString = 'ncwònzém';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Saŋ tsetsɛ̀ɛ lùm',
                    2  => 'Saŋ kàg ngwóŋ',
                    3  => 'Saŋ lepyè shúm',
                    4  => 'Saŋ cÿó',
                    5  => 'Saŋ tsɛ̀ɛ cÿó',
                    6  => 'Saŋ njÿoláʼ',
                    7  => 'Saŋ tyɛ̀b tyɛ̀b mbʉ̀ŋ',
                    8  => 'Saŋ mbʉ̀ŋ',
                    9  => 'Saŋ ngwɔ̀ʼ mbÿɛ',
                    10 => 'Saŋ tàŋa tsetsáʼ',
                    11 => 'Saŋ mejwoŋó',
                    12 => 'Saŋ lùm',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Saŋ tsetsɛ̀ɛ lùm',
                    2  => 'Saŋ kàg ngwóŋ',
                    3  => 'Saŋ lepyè shúm',
                    4  => 'Saŋ cÿó',
                    5  => 'Saŋ tsɛ̀ɛ cÿó',
                    6  => 'Saŋ njÿoláʼ',
                    7  => 'Saŋ tyɛ̀b tyɛ̀b mbʉ̀ŋ',
                    8  => 'Saŋ mbʉ̀ŋ',
                    9  => 'Saŋ ngwɔ̀ʼ mbÿɛ',
                    10 => 'Saŋ tàŋa tsetsáʼ',
                    11 => 'Saŋ mejwoŋó',
                    12 => 'Saŋ lùm',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'J',
                    2  => 'F',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'J',
                    7  => 'J',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Lyɛʼɛ́ sẅíŋtè',
                    1 => 'Mvfò lyɛ̌ʼ',
                    2 => 'Mbɔ́ɔntè mvfò lyɛ̌ʼ',
                    3 => 'Tsètsɛ̀ɛ lyɛ̌ʼ',
                    4 => 'Mbɔ́ɔntè tsetsɛ̀ɛ lyɛ̌ʼ',
                    5 => 'Mvfò màga lyɛ̌ʼ',
                    6 => 'Màga lyɛ̌ʼ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Lyɛʼɛ́ sẅíŋtè',
                    1 => 'Mvfò lyɛ̌ʼ',
                    2 => 'Mbɔ́ɔntè mvfò lyɛ̌ʼ',
                    3 => 'Tsètsɛ̀ɛ lyɛ̌ʼ',
                    4 => 'Mbɔ́ɔntè tsetsɛ̀ɛ lyɛ̌ʼ',
                    5 => 'Mvfò màga lyɛ̌ʼ',
                    6 => 'Màga lyɛ̌ʼ',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'S',
                    1 => 'M',
                    2 => 'T',
                    3 => 'W',
                    4 => 'T',
                    5 => 'F',
                    6 => 'S',
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
