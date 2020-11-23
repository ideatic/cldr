<?php
declare(strict_types=1);

/**
 * Locale data for 'ps-PK'.
 * Created: Sun, 22 Nov 2020 20:21:42 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ps_PK_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ps';
        $this->locale = 'ps-PK';
        $this->firstDayWeek = 0;
        $this->longDate = 'د Y د F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'غ.م.';
        $this->pmString = 'غ.و.';
        $this->nameEnglish = 'Pushto (Pakistan)';
        $this->nameNative = 'پښتو (پاکستان)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'جنوري',
                      2 => 'فبروري',
                      3 => 'مارچ',
                      4 => 'اپریل',
                      5 => 'مۍ',
                      6 => 'جون',
                      7 => 'جولای',
                      8 => 'اګست',
                      9 => 'سېپتمبر',
                      10 => 'اکتوبر',
                      11 => 'نومبر',
                      12 => 'دسمبر',
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
                      1 => 'جنوري',
                      2 => 'فبروري',
                      3 => 'مارچ',
                      4 => 'اپریل',
                      5 => 'مۍ',
                      6 => 'جون',
                      7 => 'جولای',
                      8 => 'اګست',
                      9 => 'سېپتمبر',
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
                      0 => 'يونۍ',
                      1 => 'دونۍ',
                      2 => 'درېنۍ',
                      3 => 'څلرنۍ',
                      4 => 'پينځنۍ',
                      5 => 'جمعه',
                      6 => 'اونۍ',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'M',
                      2 => 'T',
                      3 => 'W',
                      4 => 'T',
                      5 => 'F',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'يونۍ',
                      1 => 'دونۍ',
                      2 => 'درېنۍ',
                      3 => 'څلرنۍ',
                      4 => 'پينځنۍ',
                      5 => 'جمعه',
                      6 => 'اونۍ',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'month' => '{n, plural, one {# مياشت} other {# مياشتے}}',
              'day' => '{n, plural, one {# ورځ} other {# ورځے}}',
              'year' => '{n, plural, one {# کال} other {# کالونه}}',
              'week' => '{n, plural, one {اونۍ} other {# اونۍ}}',
              'hour' => '{n, plural, one {# h} other {# h}}',
              'minute' => '{n, plural, one {# min} other {# min}}',
              'second' => '{n, plural, one {# s} other {# s}}',
              'millisecond' => '{n, plural, one {# ms} other {# ms}}',
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
