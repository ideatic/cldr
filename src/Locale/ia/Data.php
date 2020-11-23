<?php
declare(strict_types=1);

/**
 * Locale data for 'ia'.
 * Created: Sun, 22 Nov 2020 20:21:10 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ia_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '(¤ %f)';
        $this->language = 'ia';
        $this->locale = 'ia';
        $this->firstDayWeek = 1;
        $this->longDate = 'j \\d\\e F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Interlingua';
        $this->nameNative = 'Interlingua';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan',
                      2 => 'Feb',
                      3 => 'Mar',
                      4 => 'Apr',
                      5 => 'Mai',
                      6 => 'Jun',
                      7 => 'Jul',
                      8 => 'Aug',
                      9 => 'Sep',
                      10 => 'Oct',
                      11 => 'Nov',
                      12 => 'Dec',
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
                      1 => 'Januario',
                      2 => 'Februario',
                      3 => 'Martio',
                      4 => 'April',
                      5 => 'Maio',
                      6 => 'Junio',
                      7 => 'Julio',
                      8 => 'Augusto',
                      9 => 'Septembre',
                      10 => 'Octobre',
                      11 => 'Novembre',
                      12 => 'Decembre',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dom',
                      1 => 'Lun',
                      2 => 'Mar',
                      3 => 'Mer',
                      4 => 'Jov',
                      5 => 'Ven',
                      6 => 'Sab',
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
                      0 => 'Dominica',
                      1 => 'Lunedi',
                      2 => 'Martedi',
                      3 => 'Mercuridi',
                      4 => 'Jovedi',
                      5 => 'Venerdi',
                      6 => 'Sabbato',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# an} other {# annos}}',
              'month' => '{n, plural, one {# menses} other {# menses}}',
              'week' => '{n, plural, one {# sept} other {# septimanas}}',
              'day' => '{n, plural, one {# dies} other {# dies}}',
              'hour' => '{n, plural, one {# hr} other {# hr}}',
              'minute' => '{n, plural, one {# min} other {# min}}',
              'second' => '{n, plural, one {# sec} other {# sec}}',
              'millisecond' => '{n, plural, one {# ms} other {# ms}}',
              'microsecond' => '{n, plural, one {#μs} other {#μs}}',
              'nanosecond' => '{n, plural, one {#ns} other {#ns}}',
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
