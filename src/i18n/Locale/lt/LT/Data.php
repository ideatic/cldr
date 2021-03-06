<?php
declare(strict_types=1);

/**
 * Locale data for 'lt-LT'.
 * Created: Sun, 22 Nov 2020 20:21:24 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_lt_LT_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'lt';
        $this->locale = 'lt-LT';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y i. F j j.';
        $this->shortDate = 'Y-m-d';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'priešpiet';
        $this->pmString = 'popiet';
        $this->nameEnglish = 'Lithuanian (Lithuania)';
        $this->nameNative = 'Lietuvių (Lietuva)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Saus.',
                      2 => 'Vas.',
                      3 => 'Kov.',
                      4 => 'Bal.',
                      5 => 'Geg.',
                      6 => 'Birž.',
                      7 => 'Liep.',
                      8 => 'Rugp.',
                      9 => 'Rugs.',
                      10 => 'Spal.',
                      11 => 'Lapkr.',
                      12 => 'Gruod.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'S',
                      2 => 'V',
                      3 => 'K',
                      4 => 'B',
                      5 => 'G',
                      6 => 'B',
                      7 => 'L',
                      8 => 'R',
                      9 => 'R',
                      10 => 'S',
                      11 => 'L',
                      12 => 'G',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Sausio',
                      2 => 'Vasario',
                      3 => 'Kovo',
                      4 => 'Balandžio',
                      5 => 'Gegužės',
                      6 => 'Birželio',
                      7 => 'Liepos',
                      8 => 'Rugpjūčio',
                      9 => 'Rugsėjo',
                      10 => 'Spalio',
                      11 => 'Lapkričio',
                      12 => 'Gruodžio',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Sk',
                      1 => 'Pr',
                      2 => 'An',
                      3 => 'Tr',
                      4 => 'Kt',
                      5 => 'Pn',
                      6 => 'št',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'P',
                      2 => 'A',
                      3 => 'T',
                      4 => 'K',
                      5 => 'P',
                      6 => 'Š',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Sekmadienis',
                      1 => 'Pirmadienis',
                      2 => 'Antradienis',
                      3 => 'Trečiadienis',
                      4 => 'Ketvirtadienis',
                      5 => 'Penktadienis',
                      6 => 'šeštadienis',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# metai} few {# metai} many {# metų} other {# metų}}',
              'month' => '{n, plural, one {# mėnuo} few {# mėnesiai} many {# mėnesio} other {# mėnesių}}',
              'week' => '{n, plural, one {# savaitė} few {# savaitės} many {# savaitės} other {# savaičių}}',
              'day' => '{n, plural, one {# diena} few {# dienos} many {# dienos} other {# dienų}}',
              'hour' => '{n, plural, one {# val.} few {# val.} many {# val.} other {# val.}}',
              'minute' => '{n, plural, one {# min.} few {# min.} many {# min.} other {# min.}}',
              'second' => '{n, plural, one {# sek.} few {# sek.} many {# sek.} other {# sek.}}',
              'millisecond' => '{n, plural, one {# ms} few {# ms} many {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {# μs} few {# μs} many {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# ns} few {# ns} many {# ns} other {# ns}}',
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
