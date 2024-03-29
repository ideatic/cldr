<?php

declare(strict_types=1);

/**
 * Locale data for 'ccp-IN'.
 * Created: Tue, 01 Nov 2022 12:00:19 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ccp_IN_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '#,%f¤';
        $this->currencyNegativeFormat = '(#,%f¤)';
        $this->language = 'ccp';
        $this->locale = 'ccp-IN';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F, Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => '𑄎𑄚𑄪',
                    2  => '𑄜𑄬𑄛𑄴',
                    3  => '𑄟𑄢𑄴𑄌𑄧',
                    4  => '𑄃𑄬𑄛𑄳𑄢𑄨𑄣𑄴',
                    5  => '𑄟𑄬',
                    6  => '𑄎𑄪𑄚𑄴',
                    7  => '𑄎𑄪𑄣𑄭',
                    8  => '𑄃𑄉𑄧𑄌𑄴𑄑𑄴',
                    9  => '𑄥𑄬𑄛𑄴𑄑𑄬𑄟𑄴𑄝𑄧𑄢𑄴',
                    10 => '𑄃𑄧𑄇𑄴𑄑𑄮𑄝𑄧𑄢𑄴',
                    11 => '𑄚𑄧𑄞𑄬𑄟𑄴𑄝𑄧𑄢𑄴',
                    12 => '𑄓𑄨𑄥𑄬𑄟𑄴𑄝𑄢𑄴',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => '𑄎',
                    2  => '𑄜𑄬',
                    3  => '𑄟',
                    4  => '𑄃𑄬',
                    5  => '𑄟𑄬',
                    6  => '𑄎𑄪𑄚𑄴',
                    7  => '𑄎𑄪',
                    8  => '𑄃',
                    9  => '𑄥𑄬',
                    10 => '𑄃𑄧',
                    11 => '𑄚𑄧',
                    12 => '𑄓𑄨',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => '𑄎𑄚𑄪𑄠𑄢𑄨',
                    2  => '𑄜𑄬𑄛𑄴𑄝𑄳𑄢𑄪𑄠𑄢𑄨',
                    3  => '𑄟𑄢𑄴𑄌𑄧',
                    4  => '𑄃𑄬𑄛𑄳𑄢𑄨𑄣𑄴',
                    5  => '𑄟𑄬',
                    6  => '𑄎𑄪𑄚𑄴',
                    7  => '𑄎𑄪𑄣𑄭',
                    8  => '𑄃𑄉𑄧𑄌𑄴𑄑𑄴',
                    9  => '𑄥𑄬𑄛𑄴𑄑𑄬𑄟𑄴𑄝𑄧𑄢𑄴',
                    10 => '𑄃𑄧𑄇𑄴𑄑𑄬𑄝𑄧𑄢𑄴',
                    11 => '𑄚𑄧𑄞𑄬𑄟𑄴𑄝𑄧𑄢𑄴',
                    12 => '𑄓𑄨𑄥𑄬𑄟𑄴𑄝𑄧𑄢𑄴',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => '𑄢𑄧𑄝𑄨',
                    1 => '𑄥𑄧𑄟𑄴',
                    2 => '𑄟𑄧𑄁𑄉𑄧𑄣𑄴',
                    3 => '𑄝𑄪𑄖𑄴',
                    4 => '𑄝𑄳𑄢𑄨𑄥𑄪𑄛𑄴',
                    5 => '𑄥𑄪𑄇𑄴𑄇𑄮𑄢𑄴',
                    6 => '𑄥𑄧𑄚𑄨',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => '𑄢𑄧',
                    1 => '𑄥𑄧',
                    2 => '𑄟𑄧',
                    3 => '𑄝𑄪',
                    4 => '𑄝𑄳𑄢𑄨',
                    5 => '𑄥𑄪',
                    6 => '𑄥𑄧',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => '𑄢𑄧𑄝𑄨𑄝𑄢𑄴',
                    1 => '𑄥𑄧𑄟𑄴𑄝𑄢𑄴',
                    2 => '𑄟𑄧𑄁𑄉𑄧𑄣𑄴𑄝𑄢𑄴',
                    3 => '𑄝𑄪𑄖𑄴𑄝𑄢𑄴',
                    4 => '𑄝𑄳𑄢𑄨𑄥𑄪𑄛𑄴𑄝𑄢𑄴',
                    5 => '𑄥𑄪𑄇𑄴𑄇𑄮𑄢𑄴𑄝𑄢𑄴',
                    6 => '𑄥𑄧𑄚𑄨𑄝𑄢𑄴',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# 𑄝𑄧𑄏𑄧𑄢𑄴} other {# 𑄝𑄧𑄏𑄧𑄢𑄴}}',
            'month'       => '{n, plural, one {# 𑄟𑄌𑄴} other {# 𑄟𑄌𑄴}}',
            'week'        => '{n, plural, one {# 𑄥𑄛𑄴𑄖} other {# 𑄥𑄛𑄴𑄖}}',
            'day'         => '{n, plural, one {# 𑄘𑄨𑄚𑄴} other {# 𑄘𑄨𑄚𑄴}}',
            'hour'        => '{n, plural, one {# 𑄊𑄧𑄚𑄴𑄑} other {# 𑄊𑄧𑄚𑄴𑄑}}',
            'minute'      => '{n, plural, one {# 𑄟𑄨𑄚𑄨𑄖𑄴} other {# 𑄟𑄨𑄚𑄨𑄖𑄴}}',
            'second'      => '{n, plural, one {# 𑄥𑄬𑄇𑄬𑄚𑄳𑄓𑄴} other {# 𑄥𑄬𑄇𑄬𑄚𑄳𑄓𑄴}}',
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
