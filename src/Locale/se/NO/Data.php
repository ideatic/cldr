<?php
declare(strict_types=1);

/**
 * Locale data for 'se-NO'.
 * Created: Sun, 22 Nov 2020 20:21:49 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_se_NO_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'se';
        $this->locale = 'se-NO';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'iđitbeaivet';
        $this->pmString = 'eahketbeaivet';
        $this->nameEnglish = 'Northern Sami (Norway)';
        $this->nameNative = 'Davvisámegiella (Norga)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Ođđj',
                      2 => 'Guov',
                      3 => 'Njuk',
                      4 => 'Cuo',
                      5 => 'Mies',
                      6 => 'Geas',
                      7 => 'Suoi',
                      8 => 'Borg',
                      9 => 'čakč',
                      10 => 'Golg',
                      11 => 'Skáb',
                      12 => 'Juov',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'O',
                      2 => 'G',
                      3 => 'N',
                      4 => 'C',
                      5 => 'M',
                      6 => 'G',
                      7 => 'S',
                      8 => 'B',
                      9 => 'Č',
                      10 => 'G',
                      11 => 'S',
                      12 => 'J',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Ođđajagemánnu',
                      2 => 'Guovvamánnu',
                      3 => 'Njukčamánnu',
                      4 => 'Cuoŋománnu',
                      5 => 'Miessemánnu',
                      6 => 'Geassemánnu',
                      7 => 'Suoidnemánnu',
                      8 => 'Borgemánnu',
                      9 => 'čakčamánnu',
                      10 => 'Golggotmánnu',
                      11 => 'Skábmamánnu',
                      12 => 'Juovlamánnu',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Sotn',
                      1 => 'Vuos',
                      2 => 'Maŋ',
                      3 => 'Gask',
                      4 => 'Duor',
                      5 => 'Bear',
                      6 => 'Láv',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'V',
                      2 => 'M',
                      3 => 'G',
                      4 => 'D',
                      5 => 'B',
                      6 => 'L',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Sotnabeaivi',
                      1 => 'Vuossárga',
                      2 => 'Maŋŋebárga',
                      3 => 'Gaskavahkku',
                      4 => 'Duorasdat',
                      5 => 'Bearjadat',
                      6 => 'Lávvardat',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# jahki} two {# jahkki} other {# jahkki}}',
              'month' => '{n, plural, one {# mánotbadji} two {# mánotbaji} other {# mánotbadji}}',
              'week' => '{n, plural, one {# váhku} two {# váhkku} other {# váhkku}}',
              'day' => '{n, plural, one {# jándor} two {# jándora} other {# jándora}}',
              'hour' => '{n, plural, one {# h} two {# h} other {# h}}',
              'minute' => '{n, plural, one {# min} two {# min} other {# min}}',
              'second' => '{n, plural, one {# s} two {# s} other {# s}}',
              'millisecond' => '{n, plural, one {# ms} two {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {# μs} two {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# ns} two {# ns} other {# ns}}',
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
