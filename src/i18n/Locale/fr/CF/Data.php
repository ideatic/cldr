<?php

declare(strict_types=1);

/**
 * Locale data for 'fr-CF'.
 * Created: Tue, 01 Nov 2022 12:00:23 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_fr_CF_Data extends i18n_Locale
{
    public function __construct()
    {
        // Version 42
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '(%f ¤)';
        $this->language = 'fr';
        $this->locale = 'fr-CF';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F Y';
        $this->shortDate = 'j M Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'French (Central African Republic)';
        $this->nameNative = 'Français (République centrafricaine)';
    }

    public function months($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    1  => 'Janv.',
                    2  => 'Févr.',
                    3  => 'Mars',
                    4  => 'Avr.',
                    5  => 'Mai',
                    6  => 'Juin',
                    7  => 'Juil.',
                    8  => 'Août',
                    9  => 'Sept.',
                    10 => 'Oct.',
                    11 => 'Nov.',
                    12 => 'Déc.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    1  => 'J',
                    2  => 'F',
                    3  => 'M',
                    4  => 'A',
                    5  => 'M',
                    6  => 'J',
                    7  => 'J',
                    8  => 'A',
                    9  => 'S',
                    10 => 'O',
                    11 => 'N',
                    12 => 'D',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    1  => 'Janvier',
                    2  => 'Février',
                    3  => 'Mars',
                    4  => 'Avril',
                    5  => 'Mai',
                    6  => 'Juin',
                    7  => 'Juillet',
                    8  => 'Août',
                    9  => 'Septembre',
                    10 => 'Octobre',
                    11 => 'Novembre',
                    12 => 'Décembre',
                ];
        }
    }

    public function weekDays($type = i18n_Locale::TYPE_WIDE): array
    {
        switch ($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return [
                    0 => 'Dim.',
                    1 => 'Lun.',
                    2 => 'Mar.',
                    3 => 'Mer.',
                    4 => 'Jeu.',
                    5 => 'Ven.',
                    6 => 'Sam.',
                ];
            case i18n_Locale::TYPE_NARROW:
                return [
                    0 => 'D',
                    1 => 'L',
                    2 => 'M',
                    3 => 'M',
                    4 => 'J',
                    5 => 'V',
                    6 => 'S',
                ];
            case i18n_Locale::TYPE_WIDE:
                return [
                    0 => 'Dimanche',
                    1 => 'Lundi',
                    2 => 'Mardi',
                    3 => 'Mercredi',
                    4 => 'Jeudi',
                    5 => 'Vendredi',
                    6 => 'Samedi',
                ];
        }
    }

    public function intervals(): array
    {
        return [
            'year'        => '{n, plural, one {# an} other {# ans}}',
            'month'       => '{n, plural, one {# mois} other {# mois}}',
            'week'        => '{n, plural, one {# semaine} other {# semaines}}',
            'day'         => '{n, plural, one {# jour} other {# jours}}',
            'hour'        => '{n, plural, one {# h} other {# h}}',
            'minute'      => '{n, plural, one {# min} other {# min}}',
            'second'      => '{n, plural, one {# s} other {# s}}',
            'millisecond' => '{n, plural, one {# ms} other {# ms}}',
            'microsecond' => '{n, plural, one {# μs} other {# μs}}',
            'nanosecond'  => '{n, plural, one {# ns} other {# ns}}',
        ];
    }

    public function currencies(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Currencies.php';
    }

    public function languages(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Languages.php';
    }

    public function territories(): array
    {
        return require __DIR__ . DIRECTORY_SEPARATOR . 'Territories.php';
    }
}
