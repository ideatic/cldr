<?php
declare(strict_types=1);

/**
 * Locale data for 'sw-CD'.
 * Created: Sun, 22 Nov 2020 20:21:54 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_sw_CD_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'sw';
        $this->locale = 'sw-CD';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Congo Swahili';
        $this->nameNative = 'Kiswahili (Kongo (DRC))';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan',
                      2 => 'Feb',
                      3 => 'Mac',
                      4 => 'Apr',
                      5 => 'Mei',
                      6 => 'Jun',
                      7 => 'Jul',
                      8 => 'Ago',
                      9 => 'Sep',
                      10 => 'Okt',
                      11 => 'Nov',
                      12 => 'Des',
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
                      1 => 'Januari',
                      2 => 'Februari',
                      3 => 'Machi',
                      4 => 'Aprili',
                      5 => 'Mei',
                      6 => 'Juni',
                      7 => 'Julai',
                      8 => 'Agosti',
                      9 => 'Septemba',
                      10 => 'Oktoba',
                      11 => 'Novemba',
                      12 => 'Desemba',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Jumapili',
                      1 => 'Jumatatu',
                      2 => 'Jumanne',
                      3 => 'Jumatano',
                      4 => 'Alhamisi',
                      5 => 'Ijumaa',
                      6 => 'Jumamosi',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'M',
                      2 => 'T',
                      3 => 'W',
                      4 => 'T',
                      5 => 'F',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Jumapili',
                      1 => 'Jumatatu',
                      2 => 'Jumanne',
                      3 => 'Jumatano',
                      4 => 'Alhamisi',
                      5 => 'Ijumaa',
                      6 => 'Jumamosi',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {mwaka #} other {miaka #}}',
              'month' => '{n, plural, one {mwezi #} other {miezi #}}',
              'week' => '{n, plural, one {wiki #} other {wiki #}}',
              'day' => '{n, plural, one {siku #} other {siku #}}',
              'hour' => '{n, plural, one {saa #} other {saa #}}',
              'minute' => '{n, plural, one {dakika #} other {dakika #}}',
              'second' => '{n, plural, one {sekunde #} other {sekunde #}}',
              'millisecond' => '{n, plural, one {ms #} other {ms #}}',
              'microsecond' => '{n, plural, one {mikrosekunde #} other {mikrosekunde #}}',
              'nanosecond' => '{n, plural, one {nanosekunde #} other {nanosekunde #}}',
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
