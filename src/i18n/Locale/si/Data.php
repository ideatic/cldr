<?php
declare(strict_types=1);

/**
 * Locale data for 'si'.
 * Created: Sun, 22 Nov 2020 20:21:50 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_si_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'si';
        $this->locale = 'si';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H.i.s';
        $this->shortTime = 'H.i';
        $this->dateTime = '%date% %time%';
        $this->amString = 'පෙ.ව.';
        $this->pmString = 'ප.ව.';
        $this->nameEnglish = 'Sinhala';
        $this->nameNative = 'සිංහල';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'ජන',
                      2 => 'පෙබ',
                      3 => 'මාර්තු',
                      4 => 'අප්‍රේල්',
                      5 => 'මැයි',
                      6 => 'ජූනි',
                      7 => 'ජූලි',
                      8 => 'අගෝ',
                      9 => 'සැප්',
                      10 => 'ඔක්',
                      11 => 'නොවැ',
                      12 => 'දෙසැ',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ජ',
                      2 => 'පෙ',
                      3 => 'මා',
                      4 => 'අ',
                      5 => 'මැ',
                      6 => 'ජූ',
                      7 => 'ජූ',
                      8 => 'අ',
                      9 => 'සැ',
                      10 => 'ඔ',
                      11 => 'නෙ',
                      12 => 'දෙ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'ජනවාරි',
                      2 => 'පෙබරවාරි',
                      3 => 'මාර්තු',
                      4 => 'අප්‍රේල්',
                      5 => 'මැයි',
                      6 => 'ජූනි',
                      7 => 'ජූලි',
                      8 => 'අගෝස්තු',
                      9 => 'සැප්තැම්බර්',
                      10 => 'ඔක්තෝබර්',
                      11 => 'නොවැම්බර්',
                      12 => 'දෙසැම්බර්',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'ඉරිදා',
                      1 => 'සඳුදා',
                      2 => 'අඟහ',
                      3 => 'බදාදා',
                      4 => 'බ්‍රහස්',
                      5 => 'සිකු',
                      6 => 'සෙන',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'ඉ',
                      1 => 'ස',
                      2 => 'අ',
                      3 => 'බ',
                      4 => 'බ්‍ර',
                      5 => 'සි',
                      6 => 'සෙ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'ඉරිදා',
                      1 => 'සඳුදා',
                      2 => 'අඟහරුවාදා',
                      3 => 'බදාදා',
                      4 => 'බ්‍රහස්පතින්දා',
                      5 => 'සිකුරාදා',
                      6 => 'සෙනසුරාදා',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {වසර #} other {වසර #}}',
              'month' => '{n, plural, one {මාස #} other {මාස #}}',
              'week' => '{n, plural, one {සති #} other {සති #}}',
              'day' => '{n, plural, one {දින #} other {දින #}}',
              'hour' => '{n, plural, one {පැය #} other {පැය #}}',
              'minute' => '{n, plural, one {මිනි #} other {මිනි #}}',
              'second' => '{n, plural, one {තත් #} other {තත් #}}',
              'millisecond' => '{n, plural, one {මිලිතත් #} other {මිලිතත් #}}',
              'microsecond' => '{n, plural, one {මයික්‍රොතත් #} other {මයික්‍රොතත් #}}',
              'nanosecond' => '{n, plural, one {නැත #} other {නැත #}}',
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