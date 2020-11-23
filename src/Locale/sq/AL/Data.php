<?php
declare(strict_types=1);

/**
 * Locale data for 'sq-AL'.
 * Created: Sun, 22 Nov 2020 20:21:52 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sq_AL_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'sq';
        $this->locale = 'sq-AL';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'e paradites';
        $this->pmString = 'e pasdites';
        $this->nameEnglish = 'Albanian (Albania)';
        $this->nameNative = 'Shqip (Shqipëri)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan',
                      2 => 'Shk',
                      3 => 'Mar',
                      4 => 'Pri',
                      5 => 'Maj',
                      6 => 'Qer',
                      7 => 'Korr',
                      8 => 'Gush',
                      9 => 'Sht',
                      10 => 'Tet',
                      11 => 'Nën',
                      12 => 'Dhj',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'J',
                      2 => 'Sh',
                      3 => 'M',
                      4 => 'P',
                      5 => 'M',
                      6 => 'Q',
                      7 => 'K',
                      8 => 'G',
                      9 => 'Sh',
                      10 => 'T',
                      11 => 'N',
                      12 => 'Dh',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Janar',
                      2 => 'Shkurt',
                      3 => 'Mars',
                      4 => 'Prill',
                      5 => 'Maj',
                      6 => 'Qershor',
                      7 => 'Korrik',
                      8 => 'Gusht',
                      9 => 'Shtator',
                      10 => 'Tetor',
                      11 => 'Nëntor',
                      12 => 'Dhjetor',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Die',
                      1 => 'Hën',
                      2 => 'Mar',
                      3 => 'Mër',
                      4 => 'Enj',
                      5 => 'Pre',
                      6 => 'Sht',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'H',
                      2 => 'M',
                      3 => 'M',
                      4 => 'E',
                      5 => 'P',
                      6 => 'Sh',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'E diel',
                      1 => 'E hënë',
                      2 => 'E martë',
                      3 => 'E mërkurë',
                      4 => 'E enjte',
                      5 => 'E premte',
                      6 => 'E shtunë',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# vit} other {# vjet}}',
              'month' => '{n, plural, one {# muaj} other {# muaj}}',
              'week' => '{n, plural, one {# javë} other {# javë}}',
              'day' => '{n, plural, one {# ditë} other {# ditë}}',
              'hour' => '{n, plural, one {# orë} other {# orë}}',
              'minute' => '{n, plural, one {# min.} other {# min.}}',
              'second' => '{n, plural, one {# sek.} other {# sek.}}',
              'millisecond' => '{n, plural, one {# milisek.} other {# milisek.}}',
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
