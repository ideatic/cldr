<?php

declare(strict_types=1);

/**
 * Locale data for 'te-IN'.
 * Created: Tue, 01 Nov 2022 12:00:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_te_IN_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'te';
        $this->locale = 'te-IN';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F, Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Telugu (India)';
        $this->nameNative = 'తెలుగు (భారతదేశం)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'జన',
                    2  => 'ఫిబ్ర',
                    3  => 'మార్చి',
                    4  => 'ఏప్రి',
                    5  => 'మే',
                    6  => 'జూన్',
                    7  => 'జులై',
                    8  => 'ఆగ',
                    9  => 'సెప్టెం',
                    10 => 'అక్టో',
                    11 => 'నవం',
                    12 => 'డిసెం',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'జ',
                    2  => 'ఫి',
                    3  => 'మా',
                    4  => 'ఏ',
                    5  => 'మే',
                    6  => 'జూ',
                    7  => 'జు',
                    8  => 'ఆ',
                    9  => 'సె',
                    10 => 'అ',
                    11 => 'న',
                    12 => 'డి',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'జనవరి',
                    2  => 'ఫిబ్రవరి',
                    3  => 'మార్చి',
                    4  => 'ఏప్రిల్',
                    5  => 'మే',
                    6  => 'జూన్',
                    7  => 'జులై',
                    8  => 'ఆగస్టు',
                    9  => 'సెప్టెంబర్',
                    10 => 'అక్టోబర్',
                    11 => 'నవంబర్',
                    12 => 'డిసెంబర్',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'ఆది',
                    1 => 'సోమ',
                    2 => 'మంగళ',
                    3 => 'బుధ',
                    4 => 'గురు',
                    5 => 'శుక్ర',
                    6 => 'శని',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'ఆ',
                    1 => 'సో',
                    2 => 'మ',
                    3 => 'బు',
                    4 => 'గు',
                    5 => 'శు',
                    6 => 'శ',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'ఆదివారం',
                    1 => 'సోమవారం',
                    2 => 'మంగళవారం',
                    3 => 'బుధవారం',
                    4 => 'గురువారం',
                    5 => 'శుక్రవారం',
                    6 => 'శనివారం',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# సంవత్సరం} other {# సంవత్సరాలు}}',
            'month'       => '{n, plural, one {# నెల} other {# నెలలు}}',
            'week'        => '{n, plural, one {# వారం} other {# వారాలు}}',
            'day'         => '{n, plural, one {# రోజు} other {# రోజులు}}',
            'hour'        => '{n, plural, one {# గం.} other {# గం.}}',
            'minute'      => '{n, plural, one {# నిమి.} other {# నిమి.}}',
            'second'      => '{n, plural, one {# సె.} other {# సెక.}}',
            'millisecond' => '{n, plural, one {# మి.సె} other {# మి.సె}}',
            'microsecond' => '{n, plural, one {# మై.సె} other {# మై.సె}}',
            'nanosecond'  => '{n, plural, one {# నా.సె} other {# నా.సె}}',
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
