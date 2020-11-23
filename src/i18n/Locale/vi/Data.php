<?php
declare(strict_types=1);

/**
 * Locale data for 'vi'.
 * Created: Sun, 22 Nov 2020 20:22:00 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_vi_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'vi';
        $this->locale = 'vi';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F, Y';
        $this->shortDate = 'j M, Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%time%, %date%';
        $this->amString = 'SA';
        $this->pmString = 'CH';
        $this->nameEnglish = 'Vietnamese';
        $this->nameNative = 'Tiếng Việt';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Thg 1',
                      2 => 'Thg 2',
                      3 => 'Thg 3',
                      4 => 'Thg 4',
                      5 => 'Thg 5',
                      6 => 'Thg 6',
                      7 => 'Thg 7',
                      8 => 'Thg 8',
                      9 => 'Thg 9',
                      10 => 'Thg 10',
                      11 => 'Thg 11',
                      12 => 'Thg 12',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => '1',
                      2 => '2',
                      3 => '3',
                      4 => '4',
                      5 => '5',
                      6 => '6',
                      7 => '7',
                      8 => '8',
                      9 => '9',
                      10 => '10',
                      11 => '11',
                      12 => '12',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Tháng 1',
                      2 => 'Tháng 2',
                      3 => 'Tháng 3',
                      4 => 'Tháng 4',
                      5 => 'Tháng 5',
                      6 => 'Tháng 6',
                      7 => 'Tháng 7',
                      8 => 'Tháng 8',
                      9 => 'Tháng 9',
                      10 => 'Tháng 10',
                      11 => 'Tháng 11',
                      12 => 'Tháng 12',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'CN',
                      1 => 'Th 2',
                      2 => 'Th 3',
                      3 => 'Th 4',
                      4 => 'Th 5',
                      5 => 'Th 6',
                      6 => 'Th 7',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'CN',
                      1 => 'T2',
                      2 => 'T3',
                      3 => 'T4',
                      4 => 'T5',
                      5 => 'T6',
                      6 => 'T7',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Chủ Nhật',
                      1 => 'Thứ Hai',
                      2 => 'Thứ Ba',
                      3 => 'Thứ Tư',
                      4 => 'Thứ Năm',
                      5 => 'Thứ Sáu',
                      6 => 'Thứ Bảy',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, other {# năm}}',
              'month' => '{n, plural, other {# tháng}}',
              'week' => '{n, plural, other {# tuần}}',
              'day' => '{n, plural, other {# ngày}}',
              'hour' => '{n, plural, other {# giờ}}',
              'minute' => '{n, plural, other {# phút}}',
              'second' => '{n, plural, other {# giây}}',
              'millisecond' => '{n, plural, other {# mili giây}}',
              'microsecond' => '{n, plural, other {# μs}}',
              'nanosecond' => '{n, plural, other {# nano giây}}',
            );
                }

        public function currencies(): array{
                   return require __DIR__ . DIRECTORY_SEPARATOR . 'Currencies.php';
                }

        public function languages(): array{
                   return require __DIR__ . DIRECTORY_SEPARATOR . 'Languages.php';
                }

        public function territories(): array{
                   return require __DIR__ . DIRECTORY_SEPARATOR . 'Territories.php';
                }
}