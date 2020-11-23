<?php
declare(strict_types=1);

/**
 * Locale data for 'xog'.
 * Created: Sun, 22 Nov 2020 20:22:01 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_xog_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'xog';
        $this->locale = 'xog';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'Munkyo';
        $this->pmString = 'Eigulo';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
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
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan',
                      2 => 'Feb',
                      3 => 'Mar',
                      4 => 'Apu',
                      5 => 'Maa',
                      6 => 'Juu',
                      7 => 'Jul',
                      8 => 'Agu',
                      9 => 'Seb',
                      10 => 'Oki',
                      11 => 'Nov',
                      12 => 'Des',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Janwaliyo',
                      2 => 'Febwaliyo',
                      3 => 'Marisi',
                      4 => 'Apuli',
                      5 => 'Maayi',
                      6 => 'Juuni',
                      7 => 'Julaayi',
                      8 => 'Agusito',
                      9 => 'Sebuttemba',
                      10 => 'Okitobba',
                      11 => 'Novemba',
                      12 => 'Desemba',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'S',
                      1 => 'B',
                      2 => 'B',
                      3 => 'S',
                      4 => 'K',
                      5 => 'K',
                      6 => 'M',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Sabi',
                      1 => 'Bala',
                      2 => 'Kubi',
                      3 => 'Kusa',
                      4 => 'Kuna',
                      5 => 'Kuta',
                      6 => 'Muka',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Sabiiti',
                      1 => 'Balaza',
                      2 => 'Owokubili',
                      3 => 'Owokusatu',
                      4 => 'Olokuna',
                      5 => 'Olokutaanu',
                      6 => 'Olomukaaga',
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
