<?php
declare(strict_types=1);

/**
 * Locale data for 'ast-ES'.
 * Created: Sun, 22 Nov 2020 20:20:24 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ast_ES_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'ast';
        $this->locale = 'ast-ES';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F \\d\\e Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'de la mañana';
        $this->pmString = 'de la tarde';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Xin',
                      2 => 'Feb',
                      3 => 'Mar',
                      4 => 'Abr',
                      5 => 'May',
                      6 => 'Xun',
                      7 => 'Xnt',
                      8 => 'Ago',
                      9 => 'Set',
                      10 => 'Och',
                      11 => 'Pay',
                      12 => 'Avi',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'X',
                      2 => 'F',
                      3 => 'M',
                      4 => 'A',
                      5 => 'M',
                      6 => 'X',
                      7 => 'X',
                      8 => 'A',
                      9 => 'S',
                      10 => 'O',
                      11 => 'P',
                      12 => 'A',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'De xineru',
                      2 => 'De febreru',
                      3 => 'De marzu',
                      4 => 'D’abril',
                      5 => 'De mayu',
                      6 => 'De xunu',
                      7 => 'De xunetu',
                      8 => 'D’agostu',
                      9 => 'De setiembre',
                      10 => 'D’ochobre',
                      11 => 'De payares',
                      12 => 'D’avientu',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dom',
                      1 => 'Llu',
                      2 => 'Mar',
                      3 => 'Mié',
                      4 => 'Xue',
                      5 => 'Vie',
                      6 => 'Sáb',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'L',
                      2 => 'M',
                      3 => 'M',
                      4 => 'X',
                      5 => 'V',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Domingu',
                      1 => 'Llunes',
                      2 => 'Martes',
                      3 => 'Miércoles',
                      4 => 'Xueves',
                      5 => 'Vienres',
                      6 => 'Sábadu',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# añu} other {# años}}',
              'month' => '{n, plural, one {# mes} other {# meses}}',
              'week' => '{n, plural, one {# selmana} other {# selmanes}}',
              'day' => '{n, plural, one {# día} other {# díes}}',
              'hour' => '{n, plural, one {# hr} other {# hrs}}',
              'minute' => '{n, plural, one {# min} other {# mins}}',
              'second' => '{n, plural, one {# seg} other {# segs}}',
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