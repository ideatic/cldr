<?php
declare(strict_types=1);

/**
 * Locale data for 'ka-GE'.
 * Created: Sun, 22 Nov 2020 20:21:14 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ka_GE_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = ',';
        $this->groupSeparator = ' ';
        $this->currencyFormat = '%f ¤';
        $this->currencyNegativeFormat = '%f ¤';
        $this->language = 'ka';
        $this->locale = 'ka-GE';
        $this->firstDayWeek = 1;
        $this->longDate = 'j F, Y';
        $this->shortDate = 'j M. Y';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date%, %time%';
        $this->amString = 'AM';
        $this->pmString = 'PM';
        $this->nameEnglish = 'Georgian (Georgia)';
        $this->nameNative = 'Ქართული (საქართველო)';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => 'იან',
                      2 => 'თებ',
                      3 => 'მარ',
                      4 => 'აპრ',
                      5 => 'მაი',
                      6 => 'ივნ',
                      7 => 'ივლ',
                      8 => 'აგვ',
                      9 => 'სექ',
                      10 => 'ოქტ',
                      11 => 'ნოე',
                      12 => 'დეკ',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => 'ი',
                      2 => 'თ',
                      3 => 'მ',
                      4 => 'ა',
                      5 => 'მ',
                      6 => 'ი',
                      7 => 'ი',
                      8 => 'ა',
                      9 => 'ს',
                      10 => 'ო',
                      11 => 'ნ',
                      12 => 'დ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => 'იანვარი',
                      2 => 'თებერვალი',
                      3 => 'მარტი',
                      4 => 'აპრილი',
                      5 => 'მაისი',
                      6 => 'ივნისი',
                      7 => 'ივლისი',
                      8 => 'აგვისტო',
                      9 => 'სექტემბერი',
                      10 => 'ოქტომბერი',
                      11 => 'ნოემბერი',
                      12 => 'დეკემბერი',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => 'კვი',
                      1 => 'ორშ',
                      2 => 'სამ',
                      3 => 'ოთხ',
                      4 => 'ხუთ',
                      5 => 'პარ',
                      6 => 'შაბ',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => 'კ',
                      1 => 'ო',
                      2 => 'ს',
                      3 => 'ო',
                      4 => 'ხ',
                      5 => 'პ',
                      6 => 'შ',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => 'კვირა',
                      1 => 'ორშაბათი',
                      2 => 'სამშაბათი',
                      3 => 'ოთხშაბათი',
                      4 => 'ხუთშაბათი',
                      5 => 'პარასკევი',
                      6 => 'შაბათი',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# წელი} other {# წელი}}',
              'month' => '{n, plural, one {# თვე} other {# თვე}}',
              'week' => '{n, plural, one {# კვირა} other {# კვირა}}',
              'day' => '{n, plural, one {# დღე} other {# დღე}}',
              'hour' => '{n, plural, one {# სთ} other {# სთ}}',
              'minute' => '{n, plural, one {# წთ} other {# წთ}}',
              'second' => '{n, plural, one {# წმ} other {# წმ}}',
              'millisecond' => '{n, plural, one {# მწმ} other {# მწმ}}',
              'microsecond' => '{n, plural, one {# მკწმ} other {# მკწმ}}',
              'nanosecond' => '{n, plural, one {# ნწმ} other {# ნწმ}}',
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
