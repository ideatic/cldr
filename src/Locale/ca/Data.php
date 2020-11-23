<?php
declare(strict_types=1);

/**
 * Locale data for 'ca'.
 * Created: Sun, 22 Nov 2020 20:20:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ca_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'ca';
        $this->locale = 'ca';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F \\d\\e Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'a. m.';
        $this->pmString = 'p. m.';
        $this->nameEnglish = 'Catalan';
        $this->nameNative = 'Català';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'De gen.',
                      2 => 'De febr.',
                      3 => 'De març',
                      4 => 'D’abr.',
                      5 => 'De maig',
                      6 => 'De juny',
                      7 => 'De jul.',
                      8 => 'D’ag.',
                      9 => 'De set.',
                      10 => 'D’oct.',
                      11 => 'De nov.',
                      12 => 'De des.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'GN',
                      2 => 'FB',
                      3 => 'MÇ',
                      4 => 'AB',
                      5 => 'MG',
                      6 => 'JN',
                      7 => 'JL',
                      8 => 'AG',
                      9 => 'ST',
                      10 => 'OC',
                      11 => 'NV',
                      12 => 'DS',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'De gener',
                      2 => 'De febrer',
                      3 => 'De març',
                      4 => 'D’abril',
                      5 => 'De maig',
                      6 => 'De juny',
                      7 => 'De juliol',
                      8 => 'D’agost',
                      9 => 'De setembre',
                      10 => 'D’octubre',
                      11 => 'De novembre',
                      12 => 'De desembre',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dg.',
                      1 => 'Dl.',
                      2 => 'Dt.',
                      3 => 'Dc.',
                      4 => 'Dj.',
                      5 => 'Dv.',
                      6 => 'Ds.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'Dg',
                      1 => 'Dl',
                      2 => 'Dt',
                      3 => 'Dc',
                      4 => 'Dj',
                      5 => 'Dv',
                      6 => 'Ds',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Diumenge',
                      1 => 'Dilluns',
                      2 => 'Dimarts',
                      3 => 'Dimecres',
                      4 => 'Dijous',
                      5 => 'Divendres',
                      6 => 'Dissabte',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# any} other {# anys}}',
              'month' => '{n, plural, one {# mes} other {# mesos}}',
              'week' => '{n, plural, one {# setmana} other {# setmanes}}',
              'day' => '{n, plural, one {# dia} other {# dies}}',
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
