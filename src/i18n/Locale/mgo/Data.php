<?php

declare(strict_types=1);

/**
 * Locale data for 'mgo'.
 * Created: Tue, 01 Nov 2022 12:00:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_mgo_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'mgo';
        $this->locale = 'mgo';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
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
                    1  => 'Mbegtug',
                    2  => 'Imeg àbùbì',
                    3  => 'Imeg mbəŋchubi',
                    4  => 'Iməg ngwə̀t',
                    5  => 'Iməg fog',
                    6  => 'Iməg ichiibɔd',
                    7  => 'Iməg àdùmbə̀ŋ',
                    8  => 'Iməg ichika',
                    9  => 'Iməg kud',
                    10 => 'Iməg tèsiʼe',
                    11 => 'Iməg zò',
                    12 => 'Iməg krizmed',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'M1',
                    2  => 'A2',
                    3  => 'M3',
                    4  => 'N4',
                    5  => 'F5',
                    6  => 'I6',
                    7  => 'A7',
                    8  => 'I8',
                    9  => 'K9',
                    10 => '10',
                    11 => '11',
                    12 => '12',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Iməg mbegtug',
                    2  => 'Imeg àbùbì',
                    3  => 'Imeg mbəŋchubi',
                    4  => 'Iməg ngwə̀t',
                    5  => 'Iməg fog',
                    6  => 'Iməg ichiibɔd',
                    7  => 'Iməg àdùmbə̀ŋ',
                    8  => 'Iməg ichika',
                    9  => 'Iməg kud',
                    10 => 'Iməg tèsiʼe',
                    11 => 'Iməg zò',
                    12 => 'Iməg krizmed',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Aneg 1',
                    1 => 'Aneg 2',
                    2 => 'Aneg 3',
                    3 => 'Aneg 4',
                    4 => 'Aneg 5',
                    5 => 'Aneg 6',
                    6 => 'Aneg 7',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'A1',
                    1 => 'A2',
                    2 => 'A3',
                    3 => 'A4',
                    4 => 'A5',
                    5 => 'A6',
                    6 => 'A7',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Aneg 1',
                    1 => 'Aneg 2',
                    2 => 'Aneg 3',
                    3 => 'Aneg 4',
                    4 => 'Aneg 5',
                    5 => 'Aneg 6',
                    6 => 'Aneg 7',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'month'       => '{n, plural, one {# m} other {# m}}',
            'day'         => '{n, plural, one {# d} other {# d}}',
            'year'        => '{n, plural, one {# year} other {# years}}',
            'week'        => '{n, plural, one {# week} other {# weeks}}',
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
