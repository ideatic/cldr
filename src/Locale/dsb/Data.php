<?php
declare(strict_types=1);

/**
 * Locale data for 'dsb'.
 * Created: Sun, 22 Nov 2020 20:20:34 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_dsb_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'dsb';
        $this->locale = 'dsb';
        $this->firstDayWeek = 1;
        $this->longDate = 'j. F Y';
        $this->shortDate = 'j.n.Y';
        $this->longTime = 'G:i:s';
        $this->shortTime = 'G:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'dopołdnja';
        $this->pmString = 'wótpołdnja';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan.',
                      2 => 'Feb.',
                      3 => 'Měr.',
                      4 => 'Apr.',
                      5 => 'Maj.',
                      6 => 'Jun.',
                      7 => 'Jul.',
                      8 => 'Awg.',
                      9 => 'Sep.',
                      10 => 'Okt.',
                      11 => 'Now.',
                      12 => 'Dec.',
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
                      1 => 'Januara',
                      2 => 'Februara',
                      3 => 'Měrca',
                      4 => 'Apryla',
                      5 => 'Maja',
                      6 => 'Junija',
                      7 => 'Julija',
                      8 => 'Awgusta',
                      9 => 'Septembra',
                      10 => 'Oktobra',
                      11 => 'Nowembra',
                      12 => 'Decembra',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Nje',
                      1 => 'Pón',
                      2 => 'Wał',
                      3 => 'Srj',
                      4 => 'Stw',
                      5 => 'Pět',
                      6 => 'Sob',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'N',
                      1 => 'P',
                      2 => 'W',
                      3 => 'S',
                      4 => 'S',
                      5 => 'P',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Njeźela',
                      1 => 'Pónjeźele',
                      2 => 'Wałtora',
                      3 => 'Srjoda',
                      4 => 'Stwórtk',
                      5 => 'Pětk',
                      6 => 'Sobota',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# lěto} two {# lěśe} few {# lěta} other {# lět}}',
              'month' => '{n, plural, one {# mjasec} two {# mjaseca} few {# mjasecy} other {# mjasecow}}',
              'week' => '{n, plural, one {# tyźeń} two {# tyźenja} few {# tyźenje} other {# tyźenjow}}',
              'day' => '{n, plural, one {# źeń} two {# dnja} few {# dny} other {# dnjow}}',
              'hour' => '{n, plural, one {# góź.} two {# góź.} few {# góź.} other {# góź.}}',
              'minute' => '{n, plural, one {# min.} two {# min.} few {# min.} other {# min.}}',
              'second' => '{n, plural, one {# sek.} two {# sek.} few {# sek.} other {# sek.}}',
              'millisecond' => '{n, plural, one {# ms} two {# ms} few {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {# μs} two {# μs} few {# μs} other {# μs}}',
              'nanosecond' => '{n, plural, one {# ns} two {# ns} few {# ns} other {# ns}}',
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
