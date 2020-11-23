<?php
declare(strict_types=1);

/**
 * Locale data for 'sa-IN'.
 * Created: Sun, 22 Nov 2020 20:21:47 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sa_IN_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'sa';
        $this->locale = 'sa-IN';
        $this->firstDayWeek = 0;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'पूर्वाह्न';
        $this->pmString = 'अपराह्न';
        $this->nameEnglish = 'Sanskrit (India)';
        $this->nameNative = 'संस्कृत भाषा (भारतः)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'जनवरी:',
                      2 => 'फरवरी:',
                      3 => 'मार्च:',
                      4 => 'अप्रैल:',
                      5 => 'मई',
                      6 => 'जून:',
                      7 => 'जुलाई:',
                      8 => 'अगस्त:',
                      9 => 'सितंबर:',
                      10 => 'अक्तूबर:',
                      11 => 'नवंबर:',
                      12 => 'दिसंबर:',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ज',
                      2 => 'फ',
                      3 => 'मा',
                      4 => 'अ',
                      5 => 'म',
                      6 => 'जू',
                      7 => 'जु',
                      8 => 'अ',
                      9 => 'सि',
                      10 => 'अ',
                      11 => 'न',
                      12 => 'दि',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'जनवरीमासः',
                      2 => 'फरवरीमासः',
                      3 => 'मार्चमासः',
                      4 => 'अप्रैलमासः',
                      5 => 'मईमासः',
                      6 => 'जूनमासः',
                      7 => 'जुलाईमासः',
                      8 => 'अगस्तमासः',
                      9 => 'सितंबरमासः',
                      10 => 'अक्तूबरमासः',
                      11 => 'नवंबरमासः',
                      12 => 'दिसंबरमासः',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'रवि',
                      1 => 'सोम',
                      2 => 'मंगल',
                      3 => 'बुध',
                      4 => 'गुरु',
                      5 => 'शुक्र',
                      6 => 'शनि',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'र',
                      1 => 'सो',
                      2 => 'मं',
                      3 => 'बु',
                      4 => 'गु',
                      5 => 'शु',
                      6 => 'श',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'रविवासरः',
                      1 => 'सोमवासरः',
                      2 => 'मंगलवासरः',
                      3 => 'बुधवासरः',
                      4 => 'गुरुवासर:',
                      5 => 'शुक्रवासरः',
                      6 => 'शनिवासरः',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# year} other {# years}}',
              'month' => '{n, plural, one {# month} other {# months}}',
              'week' => '{n, plural, one {# week} other {# weeks}}',
              'day' => '{n, plural, one {# day} other {# days}}',
              'hour' => '{n, plural, one {# hr} other {# hr}}',
              'minute' => '{n, plural, one {# min} other {# min}}',
              'second' => '{n, plural, one {# sec} other {# sec}}',
              'millisecond' => '{n, plural, one {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {# µs} other {# µs}}',
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