<?php
declare(strict_types=1);

/**
 * Locale data for 'ff-Adlm-GW'.
 * Created: Sun, 22 Nov 2020 20:20:50 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_ff_Adlm_GW_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = '⹁';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'ff';
        $this->locale = 'ff-Adlm-GW';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y F j';
        $this->shortDate = 'Y M j';
        $this->longTime = 'H:i:s';
        $this->shortTime = 'H:i';
        $this->dateTime = '%date% %time%';
        $this->amString = '𞤀𞤎';
        $this->pmString = '𞤇𞤎';
        $this->nameEnglish = 'Fulah';
        $this->nameNative = 'Pulaar';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => '𞤅𞤭𞥅𞤤𞤮',
                      2 => '𞤕𞤮𞤤𞤼𞤮',
                      3 => '𞤐𞤦𞤮𞥅𞤴𞤮',
                      4 => '𞤅𞤫𞥅𞤼𞤮',
                      5 => '𞤁𞤵𞥅𞤶𞤮',
                      6 => '𞤑𞤮𞤪𞤧𞤮',
                      7 => '𞤃𞤮𞤪𞤧𞤮',
                      8 => '𞤔𞤵𞤳𞤮',
                      9 => '𞤅𞤭𞤤𞤼𞤮',
                      10 => '𞤒𞤢𞤪𞤳𞤮',
                      11 => '𞤔𞤮𞤤𞤮',
                      12 => '𞤐𞤦𞤮𞤱𞤼𞤮',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => '𞤅',
                      2 => '𞤕',
                      3 => '𞤄',
                      4 => '𞤅',
                      5 => '𞤁',
                      6 => '𞤑',
                      7 => '𞤃',
                      8 => '𞤔',
                      9 => '𞤅',
                      10 => '𞤒',
                      11 => '𞤔',
                      12 => '𞤄',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => '𞤅𞤭𞥅𞤤𞤮',
                      2 => '𞤕𞤮𞤤𞤼𞤮',
                      3 => '𞤐𞤦𞤮𞥅𞤴𞤮',
                      4 => '𞤅𞤫𞥅𞤼𞤮',
                      5 => '𞤁𞤵𞥅𞤶𞤮',
                      6 => '𞤑𞤮𞤪𞤧𞤮',
                      7 => '𞤃𞤮𞤪𞤧𞤮',
                      8 => '𞤔𞤵𞤳𞤮',
                      9 => '𞤅𞤭𞤤𞤼𞤮',
                      10 => '𞤒𞤢𞤪𞤳𞤮',
                      11 => '𞤔𞤮𞤤𞤮',
                      12 => '𞤐𞤦𞤮𞤱𞤼𞤮',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => '𞤈𞤫𞤬',
                      1 => '𞤀𞥄𞤩𞤵',
                      2 => '𞤃𞤢𞤦',
                      3 => '𞤔𞤫𞤧',
                      4 => '𞤐𞤢𞥄𞤧',
                      5 => '𞤃𞤢𞤣',
                      6 => '𞤖𞤮𞤪',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => '𞤈',
                      1 => '𞤀𞥄',
                      2 => '𞤃',
                      3 => '𞤔',
                      4 => '𞤐',
                      5 => '𞤃',
                      6 => '𞤖',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => '𞤈𞤫𞤬𞤦𞤭𞤪𞥆𞤫',
                      1 => '𞤀𞥄𞤩𞤵𞤲𞥋𞤣𞤫',
                      2 => '𞤃𞤢𞤱𞤦𞤢𞥄𞤪𞤫',
                      3 => '𞤐𞤶𞤫𞤧𞤤𞤢𞥄𞤪𞤫',
                      4 => '𞤐𞤢𞥄𞤧𞤢𞥄𞤲𞤣𞤫',
                      5 => '𞤃𞤢𞤱𞤲𞤣𞤫',
                      6 => '𞤖𞤮𞤪𞤦𞤭𞤪𞥆𞤫',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, one {# 𞤸𞤭𞤼𞤢𞥄𞤲𞥋𞤣𞤫} other {# 𞤳𞤭𞤼𞤢𞥄𞤯𞤫}}',
              'month' => '{n, plural, one {# 𞤤𞤫𞤱𞤪𞤵} other {# 𞤤𞤫𞤦𞥆𞤭}}',
              'week' => '{n, plural, one {# 𞤴𞤮𞤲𞤼𞤫𞤪𞤫} other {# 𞤶𞤮𞤲𞤼𞤫}}',
              'day' => '{n, plural, one {# 𞤻𞤢𞤤𞥆𞤢𞤤} other {# 𞤻𞤢𞤤𞥆𞤫}}',
              'hour' => '{n, plural, one {# 𞤶𞤢} other {# 𞤶𞤢}}',
              'minute' => '{n, plural, one {# 𞤸𞤮𞤶} other {# 𞤸𞤮𞤶}}',
              'second' => '{n, plural, one {# 𞤳𞤭𞤲} other {# 𞤳𞤭𞤲}}',
              'millisecond' => '{n, plural, one {# 𞤥𞤳𞤭𞤲} other {# 𞤥𞤳𞤭𞤲}}',
              'microsecond' => '{n, plural, one {# 𞤻𞤳𞤭𞤲} other {# 𞤻𞤳𞤭𞤲}}',
              'nanosecond' => '{n, plural, one {# 𞤲𞤳𞤭𞤲} other {# 𞤲𞤳𞤭𞤲}}',
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
