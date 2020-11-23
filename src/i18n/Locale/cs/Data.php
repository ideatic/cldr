<?php
declare(strict_types=1);

/**
 * Locale data for 'cs'.
 * Created: Sun, 22 Nov 2020 20:20:32 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_cs_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'cs';
        $this->locale = 'cs';
        $this->firstDayWeek = 1;
        $this->longDate = 'j. F Y';
        $this->shortDate = 'j. n. Y';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'dop.';
        $this->pmString = 'odp.';
        $this->nameEnglish = 'Czech';
        $this->nameNative = 'Čeština';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Led',
                      2 => 'úno',
                      3 => 'Bře',
                      4 => 'Dub',
                      5 => 'Kvě',
                      6 => 'čvn',
                      7 => 'čvc',
                      8 => 'Srp',
                      9 => 'Zář',
                      10 => 'říj',
                      11 => 'Lis',
                      12 => 'Pro',
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
                      1 => 'Ledna',
                      2 => 'února',
                      3 => 'Března',
                      4 => 'Dubna',
                      5 => 'Května',
                      6 => 'června',
                      7 => 'července',
                      8 => 'Srpna',
                      9 => 'Září',
                      10 => 'října',
                      11 => 'Listopadu',
                      12 => 'Prosince',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Ne',
                      1 => 'Po',
                      2 => 'út',
                      3 => 'St',
                      4 => 'čt',
                      5 => 'Pá',
                      6 => 'So',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'N',
                      1 => 'P',
                      2 => 'Ú',
                      3 => 'S',
                      4 => 'Č',
                      5 => 'P',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Neděle',
                      1 => 'Pondělí',
                      2 => 'úterý',
                      3 => 'Středa',
                      4 => 'čtvrtek',
                      5 => 'Pátek',
                      6 => 'Sobota',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# rok} few {# roky} many {# roku} other {# let}}',
              'month' => '{n, plural, one {# měsíc} few {# měsíce} many {# měsíce} other {# měsíců}}',
              'week' => '{n, plural, one {# týden} few {# týdny} many {# týdne} other {# týdnů}}',
              'day' => '{n, plural, one {# den} few {# dny} many {# dne} other {# dní}}',
              'hour' => '{n, plural, one {# h} few {# h} many {# h} other {# h}}',
              'minute' => '{n, plural, one {# min} few {# min} many {# min} other {# min}}',
              'second' => '{n, plural, one {# s} few {# s} many {# s} other {# s}}',
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