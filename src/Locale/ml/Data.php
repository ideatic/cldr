<?php
declare(strict_types=1);

/**
 * Locale data for 'ml'.
 * Created: Sun, 22 Nov 2020 20:21:28 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ml_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ml';
        $this->locale = 'ml';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y, F j';
        $this->shortDate = 'Y, M j';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date% %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Malayalam';
        $this->nameNative = 'മലയാളം';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'ജനു',
                      2 => 'ഫെബ്രു',
                      3 => 'മാർ',
                      4 => 'ഏപ്രി',
                      5 => 'മേയ്',
                      6 => 'ജൂൺ',
                      7 => 'ജൂലൈ',
                      8 => 'ഓഗ',
                      9 => 'സെപ്റ്റം',
                      10 => 'ഒക്ടോ',
                      11 => 'നവം',
                      12 => 'ഡിസം',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ജ',
                      2 => 'ഫെ',
                      3 => 'മാ',
                      4 => 'ഏ',
                      5 => 'മെ',
                      6 => 'ജൂൺ',
                      7 => 'ജൂ',
                      8 => 'ഓ',
                      9 => 'സെ',
                      10 => 'ഒ',
                      11 => 'ന',
                      12 => 'ഡി',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'ജനുവരി',
                      2 => 'ഫെബ്രുവരി',
                      3 => 'മാർച്ച്',
                      4 => 'ഏപ്രിൽ',
                      5 => 'മേയ്',
                      6 => 'ജൂൺ',
                      7 => 'ജൂലൈ',
                      8 => 'ഓഗസ്റ്റ്',
                      9 => 'സെപ്റ്റംബർ',
                      10 => 'ഒക്‌ടോബർ',
                      11 => 'നവംബർ',
                      12 => 'ഡിസംബർ',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'ഞായർ',
                      1 => 'തിങ്കൾ',
                      2 => 'ചൊവ്വ',
                      3 => 'ബുധൻ',
                      4 => 'വ്യാഴം',
                      5 => 'വെള്ളി',
                      6 => 'ശനി',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'ഞ',
                      1 => 'തി',
                      2 => 'ചൊ',
                      3 => 'ബു',
                      4 => 'വ്യാ',
                      5 => 'വെ',
                      6 => 'ശ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'ഞായറാഴ്‌ച',
                      1 => 'തിങ്കളാഴ്‌ച',
                      2 => 'ചൊവ്വാഴ്ച',
                      3 => 'ബുധനാഴ്‌ച',
                      4 => 'വ്യാഴാഴ്‌ച',
                      5 => 'വെള്ളിയാഴ്‌ച',
                      6 => 'ശനിയാഴ്‌ച',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# വർഷം} other {# വർഷം}}',
              'month' => '{n, plural, one {# മാസം} other {# മാസം}}',
              'week' => '{n, plural, one {# ആഴ്ച} other {# ആഴ്ച}}',
              'day' => '{n, plural, one {# ദിവസം} other {# ദിവസം}}',
              'hour' => '{n, plural, one {# മ} other {# മ}}',
              'minute' => '{n, plural, one {# മി.} other {# മി.}}',
              'second' => '{n, plural, one {# സെ.} other {# സെ.}}',
              'millisecond' => '{n, plural, one {# മി.സെ.} other {# മി.സെ.}}',
              'microsecond' => '{n, plural, one {# μ.സെ.} other {# μ.സെ.}}',
              'nanosecond' => '{n, plural, one {# നാ.സെ.} other {# നാ.സെ.}}',
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
