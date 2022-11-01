<?php

declare(strict_types=1);

/**
 * Locale data for 'yi'.
 * Created: Tue, 01 Nov 2022 12:00:36 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_yi_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'yi';
        $this->locale = 'yi';
        $this->firstDayWeek = 1;
        $this->longDate = 'jטן F Y';
        $this->shortDate = 'jטן M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'פֿאַרמיטאָג';
        $this->pmString = 'נאָכמיטאָג';
        $this->nameEnglish = 'Yiddish';
        $this->nameNative = 'ייִדיש';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'יאַנואַר',
                    2  => 'פֿעברואַר',
                    3  => 'מערץ',
                    4  => 'אַפּריל',
                    5  => 'מיי',
                    6  => 'יוני',
                    7  => 'יולי',
                    8  => 'אויגוסט',
                    9  => 'סעפּטעמבער',
                    10 => 'אקטאבער',
                    11 => 'נאוועמבער',
                    12 => 'דעצעמבער',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'יאַנואַר',
                    2  => 'פֿעברואַר',
                    3  => 'מערץ',
                    4  => 'אַפּריל',
                    5  => 'מיי',
                    6  => 'יוני',
                    7  => 'יולי',
                    8  => 'אויגוסט',
                    9  => 'סעפּטעמבער',
                    10 => 'אקטאבער',
                    11 => 'נאוועמבער',
                    12 => 'דעצעמבער',
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
                    0 => 'זונטיק',
                    1 => 'מאָנטיק',
                    2 => 'דינסטיק',
                    3 => 'מיטוואך',
                    4 => 'דאנערשטיק',
                    5 => 'פֿרײַטיק',
                    6 => 'שבת',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'זונטיק',
                    1 => 'מאָנטיק',
                    2 => 'דינסטיק',
                    3 => 'מיטוואך',
                    4 => 'דאנערשטיק',
                    5 => 'פֿרײַטיק',
                    6 => 'שבת',
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
