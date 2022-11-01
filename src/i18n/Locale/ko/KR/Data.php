<?php

declare(strict_types=1);

/**
 * Locale data for 'ko-KR'.
 * Created: Tue, 01 Nov 2022 12:00:27 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ko_KR_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ko';
        $this->locale = 'ko-KR';
        $this->firstDayWeek = 0;
        $this->longDate = 'Y년 n월 j일';
        $this->shortDate = 'Y. n. j.';
        $this->longTime = 'A g:i:s';
        $this->shortTime = 'A g:i';
        $this->dateTime = '%date% %time%';
        $this->amString = '오전';
        $this->pmString = '오후';
        $this->nameEnglish = 'Korean (South Korea)';
        $this->nameNative = '한국어 (대한민국)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => '1월',
                    2  => '2월',
                    3  => '3월',
                    4  => '4월',
                    5  => '5월',
                    6  => '6월',
                    7  => '7월',
                    8  => '8월',
                    9  => '9월',
                    10 => '10월',
                    11 => '11월',
                    12 => '12월',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => '1월',
                    2  => '2월',
                    3  => '3월',
                    4  => '4월',
                    5  => '5월',
                    6  => '6월',
                    7  => '7월',
                    8  => '8월',
                    9  => '9월',
                    10 => '10월',
                    11 => '11월',
                    12 => '12월',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => '1월',
                    2  => '2월',
                    3  => '3월',
                    4  => '4월',
                    5  => '5월',
                    6  => '6월',
                    7  => '7월',
                    8  => '8월',
                    9  => '9월',
                    10 => '10월',
                    11 => '11월',
                    12 => '12월',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => '일',
                    1 => '월',
                    2 => '화',
                    3 => '수',
                    4 => '목',
                    5 => '금',
                    6 => '토',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => '일',
                    1 => '월',
                    2 => '화',
                    3 => '수',
                    4 => '목',
                    5 => '금',
                    6 => '토',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => '일요일',
                    1 => '월요일',
                    2 => '화요일',
                    3 => '수요일',
                    4 => '목요일',
                    5 => '금요일',
                    6 => '토요일',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, other {#년}}',
            'month'       => '{n, plural, other {#개월}}',
            'week'        => '{n, plural, other {#주}}',
            'day'         => '{n, plural, other {#일}}',
            'hour'        => '{n, plural, other {#시간}}',
            'minute'      => '{n, plural, other {#분}}',
            'second'      => '{n, plural, other {#초}}',
            'millisecond' => '{n, plural, other {#ms}}',
            'microsecond' => '{n, plural, other {#μs}}',
            'nanosecond'  => '{n, plural, other {#ns}}',
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
