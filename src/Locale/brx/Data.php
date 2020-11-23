<?php
declare(strict_types=1);

/**
 * Locale data for 'brx'.
 * Created: Sun, 22 Nov 2020 20:20:27 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_brx_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'brx';
        $this->locale = 'brx';
        $this->firstDayWeek = 1;
        $this->longDate = 'F j, Y';
        $this->shortDate = 'M j, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'फुं';
        $this->pmString = 'बेलासे';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ज',
                      2 => 'फे',
                      3 => 'मा',
                      4 => 'ए',
                      5 => 'मे',
                      6 => 'जु',
                      7 => 'जु',
                      8 => 'आ',
                      9 => 'से',
                      10 => 'अ',
                      11 => 'न',
                      12 => 'दि',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'जानुवारी',
                      2 => 'फेब्रुवारी',
                      3 => 'मार्स',
                      4 => 'एफ्रिल',
                      5 => 'मे',
                      6 => 'जुन',
                      7 => 'जुलाइ',
                      8 => 'आगस्थ',
                      9 => 'सेबथेज्ब़र',
                      10 => 'अखथबर',
                      11 => 'नबेज्ब़र',
                      12 => 'दिसेज्ब़र',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'जानुवारी',
                      2 => 'फेब्रुवारी',
                      3 => 'मार्स',
                      4 => 'एफ्रिल',
                      5 => 'मे',
                      6 => 'जुन',
                      7 => 'जुलाइ',
                      8 => 'आगस्थ',
                      9 => 'सेबथेज्ब़र',
                      10 => 'अखथबर',
                      11 => 'नबेज्ब़र',
                      12 => 'दिसेज्ब़र',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'र',
                      1 => 'स',
                      2 => 'मं',
                      3 => 'बु',
                      4 => 'बि',
                      5 => 'सु',
                      6 => 'सु',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'रबि',
                      1 => 'सम',
                      2 => 'मंगल',
                      3 => 'बुद',
                      4 => 'बिसथि',
                      5 => 'सुखुर',
                      6 => 'सुनि',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'रबिबार',
                      1 => 'समबार',
                      2 => 'मंगलबार',
                      3 => 'बुदबार',
                      4 => 'बिसथिबार',
                      5 => 'सुखुरबार',
                      6 => 'सुनिबार',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# साल} other {# साल}}',
              'month' => '{n, plural, one {# महीना} other {# महीने}}',
              'week' => '{n, plural, one {# सप्ताह} other {# सप्ताह}}',
              'day' => '{n, plural, one {# सान} other {# सान}}',
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
