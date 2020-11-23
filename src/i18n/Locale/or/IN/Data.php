<?php
declare(strict_types=1);

/**
 * Locale data for 'or-IN'.
 * Created: Sun, 22 Nov 2020 20:21:39 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_or_IN_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'or';
        $this->locale = 'or-IN';
        $this->firstDayWeek = 0;
        $this->longDate = 'F j, Y';
        $this->shortDate = 'M j, Y';
        $this->longTime = 'g:i:s A';
        $this->shortTime = 'g:i A';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Odia (India)';
        $this->nameNative = 'ଓଡ଼ିଆ (ଭାରତ)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'ଜାନୁଆରୀ',
                      2 => 'ଫେବୃଆରୀ',
                      3 => 'ମାର୍ଚ୍ଚ',
                      4 => 'ଅପ୍ରେଲ',
                      5 => 'ମଇ',
                      6 => 'ଜୁନ',
                      7 => 'ଜୁଲାଇ',
                      8 => 'ଅଗଷ୍ଟ',
                      9 => 'ସେପ୍ଟେମ୍ବର',
                      10 => 'ଅକ୍ଟୋବର',
                      11 => 'ନଭେମ୍ବର',
                      12 => 'ଡିସେମ୍ବର',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ଜା',
                      2 => 'ଫେ',
                      3 => 'ମା',
                      4 => 'ଅ',
                      5 => 'ମଇ',
                      6 => 'ଜୁ',
                      7 => 'ଜୁ',
                      8 => 'ଅ',
                      9 => 'ସେ',
                      10 => 'ଅ',
                      11 => 'ନ',
                      12 => 'ଡି',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'ଜାନୁଆରୀ',
                      2 => 'ଫେବୃଆରୀ',
                      3 => 'ମାର୍ଚ୍ଚ',
                      4 => 'ଅପ୍ରେଲ',
                      5 => 'ମଇ',
                      6 => 'ଜୁନ',
                      7 => 'ଜୁଲାଇ',
                      8 => 'ଅଗଷ୍ଟ',
                      9 => 'ସେପ୍ଟେମ୍ବର',
                      10 => 'ଅକ୍ଟୋବର',
                      11 => 'ନଭେମ୍ବର',
                      12 => 'ଡିସେମ୍ବର',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'ରବି',
                      1 => 'ସୋମ',
                      2 => 'ମଙ୍ଗଳ',
                      3 => 'ବୁଧ',
                      4 => 'ଗୁରୁ',
                      5 => 'ଶୁକ୍ର',
                      6 => 'ଶନି',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'ର',
                      1 => 'ସୋ',
                      2 => 'ମ',
                      3 => 'ବୁ',
                      4 => 'ଗୁ',
                      5 => 'ଶୁ',
                      6 => 'ଶ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'ରବିବାର',
                      1 => 'ସୋମବାର',
                      2 => 'ମଙ୍ଗଳବାର',
                      3 => 'ବୁଧବାର',
                      4 => 'ଗୁରୁବାର',
                      5 => 'ଶୁକ୍ରବାର',
                      6 => 'ଶନିବାର',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# ବର୍ଷ} other {# ବର୍ଷ}}',
              'month' => '{n, plural, one {# ମାସ} other {# ମାସ}}',
              'week' => '{n, plural, one {# ସପ୍ତାହ} other {# ସପ୍ତାହ}}',
              'day' => '{n, plural, one {# ଦିନ} other {# ଦିନ}}',
              'hour' => '{n, plural, one {# ଘଣ୍ଟା} other {# ଘଣ୍ଟା}}',
              'minute' => '{n, plural, one {# ମିନିଟ୍‌} other {# ମିନିଟ୍‌}}',
              'second' => '{n, plural, one {# ସେକେଣ୍ଡ} other {# ସେକେଣ୍ଡ}}',
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