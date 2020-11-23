<?php
declare(strict_types=1);

/**
 * Locale data for 'fa-AF'.
 * Created: Sun, 22 Nov 2020 20:20:49 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_fa_AF_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '٫';
        $this->groupSeparator = '٬';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '‎(¤ %f)';
        $this->language = 'fa';
        $this->locale = 'fa-AF';
        $this->firstDayWeek = 6;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date%،‏ %time%';
        $this->amString = 'قبل‌ازظهر';
        $this->pmString = 'بعدازظهر';
        $this->nameEnglish = 'Dari';
        $this->nameNative = 'دری';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'جنو',
                      2 => 'فبروری',
                      3 => 'مارچ',
                      4 => 'اپریل',
                      5 => 'می',
                      6 => 'جون',
                      7 => 'جول',
                      8 => 'اگست',
                      9 => 'سپتمبر',
                      10 => 'اکتوبر',
                      11 => 'نومبر',
                      12 => 'دسم',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ج',
                      2 => 'ف',
                      3 => 'م',
                      4 => 'ا',
                      5 => 'م',
                      6 => 'ج',
                      7 => 'ج',
                      8 => 'ا',
                      9 => 'س',
                      10 => 'ا',
                      11 => 'ن',
                      12 => 'د',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'جنوری',
                      2 => 'فبروری',
                      3 => 'مارچ',
                      4 => 'اپریل',
                      5 => 'می',
                      6 => 'جون',
                      7 => 'جولای',
                      8 => 'اگست',
                      9 => 'سپتمبر',
                      10 => 'اکتوبر',
                      11 => 'نومبر',
                      12 => 'دسمبر',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'یکشنبه',
                      1 => 'دوشنبه',
                      2 => 'سه‌شنبه',
                      3 => 'چهارشنبه',
                      4 => 'پنجشنبه',
                      5 => 'جمعه',
                      6 => 'شنبه',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'ی',
                      1 => 'د',
                      2 => 'س',
                      3 => 'چ',
                      4 => 'پ',
                      5 => 'ج',
                      6 => 'ش',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'یکشنبه',
                      1 => 'دوشنبه',
                      2 => 'سه‌شنبه',
                      3 => 'چهارشنبه',
                      4 => 'پنجشنبه',
                      5 => 'جمعه',
                      6 => 'شنبه',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# سال} other {# سال}}',
              'month' => '{n, plural, one {# ماه} other {# ماه}}',
              'week' => '{n, plural, one {# هفته} other {# هفته}}',
              'day' => '{n, plural, one {# روز} other {# روز}}',
              'hour' => '{n, plural, one {# ساعت} other {# ساعت}}',
              'minute' => '{n, plural, one {# دقیقه} other {# دقیقه}}',
              'second' => '{n, plural, one {# ثانیه} other {# ثانیه}}',
              'millisecond' => '{n, plural, one {# میلی‌ثانیه} other {# میلی‌ثانیه}}',
              'microsecond' => '{n, plural, one {# میکروثانیه} other {# <LRM>µs}}',
              'nanosecond' => '{n, plural, one {# <LRM>ns} other {# <LRM>ns}}',
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
