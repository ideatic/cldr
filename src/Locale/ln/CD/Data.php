<?php
declare(strict_types=1);

/**
 * Locale data for 'ln-CD'.
 * Created: Sun, 22 Nov 2020 20:21:22 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ln_CD_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ln';
        $this->locale = 'ln-CD';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'ntɔ́ngɔ́';
        $this->pmString = 'mpókwa';
        $this->nameEnglish = 'Lingala (Congo (DRC))';
        $this->nameNative = 'Lingála (Kongó-Kinsásá)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'Y',
                      2 => 'F',
                      3 => 'M',
                      4 => 'A',
                      5 => 'M',
                      6 => 'Y',
                      7 => 'Y',
                      8 => 'A',
                      9 => 'S',
                      10 => 'ɔ',
                      11 => 'N',
                      12 => 'D',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Yan',
                      2 => 'Fbl',
                      3 => 'Msi',
                      4 => 'Apl',
                      5 => 'Mai',
                      6 => 'Yun',
                      7 => 'Yul',
                      8 => 'Agt',
                      9 => 'Stb',
                      10 => 'ɔtb',
                      11 => 'Nvb',
                      12 => 'Dsb',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Sánzá ya yambo',
                      2 => 'Sánzá ya míbalé',
                      3 => 'Sánzá ya mísáto',
                      4 => 'Sánzá ya mínei',
                      5 => 'Sánzá ya mítáno',
                      6 => 'Sánzá ya motóbá',
                      7 => 'Sánzá ya nsambo',
                      8 => 'Sánzá ya mwambe',
                      9 => 'Sánzá ya libwa',
                      10 => 'Sánzá ya zómi',
                      11 => 'Sánzá ya zómi na mɔ̌kɔ́',
                      12 => 'Sánzá ya zómi na míbalé',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'E',
                      1 => 'Y',
                      2 => 'M',
                      3 => 'M',
                      4 => 'M',
                      5 => 'M',
                      6 => 'P',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Eye',
                      1 => 'Ybo',
                      2 => 'Mbl',
                      3 => 'Mst',
                      4 => 'Min',
                      5 => 'Mtn',
                      6 => 'Mps',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Eyenga',
                      1 => 'Mokɔlɔ mwa yambo',
                      2 => 'Mokɔlɔ mwa míbalé',
                      3 => 'Mokɔlɔ mwa mísáto',
                      4 => 'Mokɔlɔ ya mínéi',
                      5 => 'Mokɔlɔ ya mítáno',
                      6 => 'Mpɔ́sɔ',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# mobú} other {# mibú}}',
              'month' => '{n, plural, one {# sánzá} other {# sánzá}}',
              'week' => '{n, plural, one {# mpɔ́sɔ} other {# mpɔ́sɔ}}',
              'day' => '{n, plural, one {# mokɔlɔ} other {# mikɔlɔ}}',
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
