<?php
declare(strict_types=1);

/**
 * Locale data for 'pt-CH'.
 * Created: Sun, 22 Nov 2020 20:21:43 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_pt_CH_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = '.';
        $this->currencyFormat = '¤ %f';
        $this->currencyNegativeFormat = '¤ %f';
        $this->language = 'pt';
        $this->locale = 'pt-CH';
        $this->firstDayWeek = 1;
        $this->longDate = 'j \\d\\e F \\d\\e Y';
        $this->shortDate = 'j \\d\\e M \\d\\e Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Portuguese (Switzerland)';
        $this->nameNative = 'Português (Suíça)';
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
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'Janeiro',
                      2 => 'Fevereiro',
                      3 => 'Março',
                      4 => 'Abril',
                      5 => 'Maio',
                      6 => 'Junho',
                      7 => 'Julho',
                      8 => 'Agosto',
                      9 => 'Setembro',
                      10 => 'Outubro',
                      11 => 'Novembro',
                      12 => 'Dezembro',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'Jan.',
                      2 => 'Fev.',
                      3 => 'Mar.',
                      4 => 'Abr.',
                      5 => 'Mai.',
                      6 => 'Jun.',
                      7 => 'Jul.',
                      8 => 'Ago.',
                      9 => 'Set.',
                      10 => 'Out.',
                      11 => 'Nov.',
                      12 => 'Dez.',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'D',
                      1 => 'S',
                      2 => 'T',
                      3 => 'Q',
                      4 => 'Q',
                      5 => 'S',
                      6 => 'S',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'Domingo',
                      1 => 'Segunda-feira',
                      2 => 'Terça-feira',
                      3 => 'Quarta-feira',
                      4 => 'Quinta-feira',
                      5 => 'Sexta-feira',
                      6 => 'Sábado',
                    );
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'Dom.',
                      1 => 'Seg.',
                      2 => 'Ter.',
                      3 => 'Qua.',
                      4 => 'Qui.',
                      5 => 'Sex.',
                      6 => 'Sáb.',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# ano} other {# anos}}',
              'month' => '{n, plural, one {# mês} other {# meses}}',
              'week' => '{n, plural, one {# semana} other {# semanas}}',
              'day' => '{n, plural, one {# dia} other {# dias}}',
              'second' => '{n, plural, one {# seg} other {# seg}}',
              'hour' => '{n, plural, one {# hr} other {# hr}}',
              'minute' => '{n, plural, one {# min} other {# min}}',
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
