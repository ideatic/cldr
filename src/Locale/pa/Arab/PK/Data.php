<?php
declare(strict_types=1);

/**
 * Locale data for 'pa-Arab-PK'.
 * Created: Sun, 22 Nov 2020 20:21:40 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_pa_Arab_PK_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'pa';
        $this->locale = 'pa-Arab-PK';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'ਪੂ.ਦੁ.';
        $this->pmString = 'ਬਾ.ਦੁ.';
        $this->nameEnglish = 'Punjabi';
        $this->nameNative = 'ਪੰਜਾਬੀ';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'جنوری',
                      2 => 'فروری',
                      3 => 'مارچ',
                      4 => 'اپریل',
                      5 => 'مئ',
                      6 => 'جون',
                      7 => 'جولائی',
                      8 => 'اگست',
                      9 => 'ستمبر',
                      10 => 'اکتوبر',
                      11 => 'نومبر',
                      12 => 'دسمبر',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'جنوری',
                      2 => 'فروری',
                      3 => 'مارچ',
                      4 => 'اپریل',
                      5 => 'مئ',
                      6 => 'جون',
                      7 => 'جولائی',
                      8 => 'اگست',
                      9 => 'ستمبر',
                      10 => 'اکتوبر',
                      11 => 'نومبر',
                      12 => 'دسمبر',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ਜ',
                      2 => 'ਫ਼',
                      3 => 'ਮਾ',
                      4 => 'ਅ',
                      5 => 'ਮ',
                      6 => 'ਜੂ',
                      7 => 'ਜੁ',
                      8 => 'ਅ',
                      9 => 'ਸ',
                      10 => 'ਅ',
                      11 => 'ਨ',
                      12 => 'ਦ',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'اتوار',
                      1 => 'پیر',
                      2 => 'منگل',
                      3 => 'بُدھ',
                      4 => 'جمعرات',
                      5 => 'جمعہ',
                      6 => 'ہفتہ',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'ਐਤ',
                      1 => 'ਸੋਮ',
                      2 => 'ਮੰਗਲ',
                      3 => 'ਬੁੱਧ',
                      4 => 'ਵੀਰ',
                      5 => 'ਸ਼ੁੱਕਰ',
                      6 => 'ਸ਼ਨਿੱਚਰ',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'ਐ',
                      1 => 'ਸੋ',
                      2 => 'ਮੰ',
                      3 => 'ਬੁੱ',
                      4 => 'ਵੀ',
                      5 => 'ਸ਼ੁੱ',
                      6 => 'ਸ਼',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# ਸਾਲ} other {# ਸਾਲ}}',
              'month' => '{n, plural, one {# ਮਹੀਨਾ} other {# ਮਹੀਨੇ}}',
              'week' => '{n, plural, one {# ਹਫ਼ਤਾ} other {# ਹਫ਼ਤੇ}}',
              'day' => '{n, plural, one {# ਦਿਨ} other {# ਦਿਨ}}',
              'hour' => '{n, plural, one {# ਘੰਟਾ} other {# ਘੰਟੇ}}',
              'minute' => '{n, plural, one {# ਮਿੰਟ} other {# ਮਿੰਟ}}',
              'second' => '{n, plural, one {# ਸਕਿੰਟ} other {# ਸਕਿੰਟ}}',
              'millisecond' => '{n, plural, one {# ਮਿਲੀਸਕਿੰਟ} other {# ਮਿਲੀਸਕਿੰਟ}}',
              'microsecond' => '{n, plural, one {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# ns} other {# ns}}',
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
