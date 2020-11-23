<?php
declare(strict_types=1);

/**
 * Locale data for 'kea'.
 * Created: Sun, 22 Nov 2020 20:21:15 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_kea_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'kea';
        $this->locale = 'kea';
        $this->firstDayWeek = 1;
        $this->longDate = 'j \\d\\i F \\d\\i Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'am';
        $this->pmString = 'pm';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan',
                      2 => 'Feb',
                      3 => 'Mar',
                      4 => 'Abr',
                      5 => 'Mai',
                      6 => 'Jun',
                      7 => 'Jul',
                      8 => 'Ago',
                      9 => 'Set',
                      10 => 'Otu',
                      11 => 'Nuv',
                      12 => 'Diz',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'J',
                      2 => 'F',
                      3 => 'M',
                      4 => 'A',
                      5 => 'M',
                      6 => 'J',
                      7 => 'J',
                      8 => 'A',
                      9 => 'S',
                      10 => 'O',
                      11 => 'N',
                      12 => 'D',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Janeru',
                      2 => 'Febreru',
                      3 => 'Marsu',
                      4 => 'Abril',
                      5 => 'Maiu',
                      6 => 'Junhu',
                      7 => 'Julhu',
                      8 => 'Agostu',
                      9 => 'Setenbru',
                      10 => 'Otubru',
                      11 => 'Nuvenbru',
                      12 => 'Dizenbru',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dum',
                      1 => 'Sig',
                      2 => 'Ter',
                      3 => 'Kua',
                      4 => 'Kin',
                      5 => 'Ses',
                      6 => 'Sab',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'S',
                      2 => 'T',
                      3 => 'K',
                      4 => 'K',
                      5 => 'S',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Dumingu',
                      1 => 'Sigunda-fera',
                      2 => 'Tersa-fera',
                      3 => 'Kuarta-fera',
                      4 => 'Kinta-fera',
                      5 => 'Sesta-fera',
                      6 => 'Sábadu',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, other {# anu}}',
              'month' => '{n, plural, other {# mes}}',
              'week' => '{n, plural, other {# simana}}',
              'day' => '{n, plural, other {# dia}}',
              'hour' => '{n, plural, other {# h}}',
              'minute' => '{n, plural, other {# min.}}',
              'second' => '{n, plural, other {# sig.}}',
              'millisecond' => '{n, plural, other {# ms}}',
              'microsecond' => '{n, plural, other {# μs}}',
              'nanosecond' => '{n, plural, other {# ns}}',
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
