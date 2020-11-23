<?php
declare(strict_types=1);

/**
 * Locale data for 'ro'.
 * Created: Sun, 22 Nov 2020 20:21:45 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ro_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'ro';
        $this->locale = 'ro';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'a.m.';
        $this->pmString = 'p.m.';
        $this->nameEnglish = 'Romanian';
        $this->nameNative = 'Română';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Ian.',
                      2 => 'Feb.',
                      3 => 'Mar.',
                      4 => 'Apr.',
                      5 => 'Mai',
                      6 => 'Iun.',
                      7 => 'Iul.',
                      8 => 'Aug.',
                      9 => 'Sept.',
                      10 => 'Oct.',
                      11 => 'Nov.',
                      12 => 'Dec.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'I',
                      2 => 'F',
                      3 => 'M',
                      4 => 'A',
                      5 => 'M',
                      6 => 'I',
                      7 => 'I',
                      8 => 'A',
                      9 => 'S',
                      10 => 'O',
                      11 => 'N',
                      12 => 'D',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Ianuarie',
                      2 => 'Februarie',
                      3 => 'Martie',
                      4 => 'Aprilie',
                      5 => 'Mai',
                      6 => 'Iunie',
                      7 => 'Iulie',
                      8 => 'August',
                      9 => 'Septembrie',
                      10 => 'Octombrie',
                      11 => 'Noiembrie',
                      12 => 'Decembrie',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dum.',
                      1 => 'Lun.',
                      2 => 'Mar.',
                      3 => 'Mie.',
                      4 => 'Joi',
                      5 => 'Vin.',
                      6 => 'Sâm.',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'L',
                      2 => 'M',
                      3 => 'M',
                      4 => 'J',
                      5 => 'V',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Duminică',
                      1 => 'Luni',
                      2 => 'Marți',
                      3 => 'Miercuri',
                      4 => 'Joi',
                      5 => 'Vineri',
                      6 => 'Sâmbătă',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# an} few {# ani} other {# de ani}}',
              'month' => '{n, plural, one {# lună} few {# luni} other {# de luni}}',
              'week' => '{n, plural, one {# săptămână} few {# săptămâni} other {# de săptămâni}}',
              'day' => '{n, plural, one {# zi} few {# zile} other {# de zile}}',
              'hour' => '{n, plural, one {# oră} few {# ore} other {# ore}}',
              'minute' => '{n, plural, one {# min.} few {# min.} other {# min.}}',
              'second' => '{n, plural, one {# s} few {# s} other {# s}}',
              'millisecond' => '{n, plural, one {# ms} few {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {# μs} few {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# ns} few {# ns} other {# ns}}',
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