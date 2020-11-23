<?php
declare(strict_types=1);

/**
 * Locale data for 'se-FI'.
 * Created: Sun, 22 Nov 2020 20:21:49 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_se_FI_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'se';
        $this->locale = 'se-FI';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'ib';
        $this->pmString = 'eb';
        $this->nameEnglish = 'Northern Sami (Finland)';
        $this->nameNative = 'Davvisámegiella (Suopma)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      4 => 'Cuoŋ',
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
                      0 => 'So',
                      1 => 'Má',
                      2 => 'Di',
                      3 => 'Ga',
                      4 => 'Du',
                      5 => 'Be',
                      6 => 'Lá',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'M',
                      2 => 'D',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Mánnodat',
                      2 => 'Disdat',
                      3 => 'Gaskavahkku',
                      4 => 'Duorastat',
                      5 => 'Bearjadat',
                      6 => 'Lávvordat',
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