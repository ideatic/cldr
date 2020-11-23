<?php
declare(strict_types=1);

/**
 * Locale data for 'doi'.
 * Created: Sun, 22 Nov 2020 20:20:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_doi_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'doi';
        $this->locale = 'doi';
        $this->firstDayWeek = 1;
        $this->longDate = 'j, F Y';
        $this->shortDate = 'j, M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'सवेर';
        $this->pmString = 'बाद दपैहर';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'जन.',
                      2 => 'फर.',
                      3 => 'मार्च',
                      4 => 'अप्रैल',
                      5 => 'मेई',
                      6 => 'जून',
                      7 => 'जुलाई',
                      8 => 'अग.',
                      9 => 'सित.',
                      10 => 'अक्तू.',
                      11 => 'नव.',
                      12 => 'दिस.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ज',
                      2 => 'फ',
                      3 => 'मा',
                      4 => 'अ',
                      5 => 'मे',
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
                      1 => 'जनवरी',
                      2 => 'फरवरी',
                      3 => 'मार्च',
                      4 => 'अप्रैल',
                      5 => 'मेई',
                      6 => 'जून',
                      7 => 'जुलाई',
                      8 => 'अगस्त',
                      9 => 'सितंबर',
                      10 => 'अत्तूबर',
                      11 => 'नवंबर',
                      12 => 'दिसंबर',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'ऐत',
                      1 => 'सोम',
                      2 => 'मंगल',
                      3 => 'बुध',
                      4 => 'बीर',
                      5 => 'शुक्र',
                      6 => 'शनि',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'ऐ.',
                      1 => 'सो.',
                      2 => 'म.',
                      3 => 'बु.',
                      4 => 'बी.',
                      5 => 'शु.',
                      6 => 'श.',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'ऐतबार',
                      1 => 'सोमबार',
                      2 => 'मंगलबार',
                      3 => 'बुधबार',
                      4 => 'बीरबार',
                      5 => 'शुक्रबार',
                      6 => 'शनीबार',
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