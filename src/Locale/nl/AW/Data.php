<?php
declare(strict_types=1);

/**
 * Locale data for 'nl-AW'.
 * Created: Sun, 22 Nov 2020 20:21:35 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_nl_AW_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'nl';
        $this->locale = 'nl-AW';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'a.m.';
        $this->pmString = 'p.m.';
        $this->nameEnglish = 'Dutch (Aruba)';
        $this->nameNative = 'Nederlands (Aruba)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan.',
                      2 => 'Feb.',
                      3 => 'Mrt.',
                      4 => 'Apr.',
                      5 => 'Mei',
                      6 => 'Jun.',
                      7 => 'Jul.',
                      8 => 'Aug.',
                      9 => 'Sep.',
                      10 => 'Okt.',
                      11 => 'Nov.',
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
                      1 => 'Januari',
                      2 => 'Februari',
                      3 => 'Maart',
                      4 => 'April',
                      5 => 'Mei',
                      6 => 'Juni',
                      7 => 'Juli',
                      8 => 'Augustus',
                      9 => 'September',
                      10 => 'Oktober',
                      11 => 'November',
                      12 => 'December',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Zo',
                      1 => 'Ma',
                      2 => 'Di',
                      3 => 'Wo',
                      4 => 'Do',
                      5 => 'Vr',
                      6 => 'Za',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'Z',
                      1 => 'M',
                      2 => 'D',
                      3 => 'W',
                      4 => 'D',
                      5 => 'V',
                      6 => 'Z',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Zondag',
                      1 => 'Maandag',
                      2 => 'Dinsdag',
                      3 => 'Woensdag',
                      4 => 'Donderdag',
                      5 => 'Vrijdag',
                      6 => 'Zaterdag',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# jaar} other {# jaar}}',
              'month' => '{n, plural, one {# maand} other {# maanden}}',
              'week' => '{n, plural, one {# week} other {# weken}}',
              'day' => '{n, plural, one {# dag} other {# dagen}}',
              'hour' => '{n, plural, one {# uur} other {# uur}}',
              'minute' => '{n, plural, one {# min} other {# min}}',
              'second' => '{n, plural, one {# sec} other {# sec}}',
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
