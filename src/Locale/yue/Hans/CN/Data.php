<?php
declare(strict_types=1);

/**
 * Locale data for 'yue-Hans-CN'.
 * Created: Sun, 22 Nov 2020 20:22:02 +0100
 *
 * This file is automatically generated using the data from the Unicode Common Locale Data Repository.
 *
 * Copyright © 1991-2007 Unicode, Inc. All rights reserved.
 * Distributed under the Terms of Use in http://www.unicode.org/copyright.html.
 */
class i18n_Locale_yue_Hans_CN_Data extends i18n_Locale
{
    public function __construct() {
        // Version 38
        $this->orientation = 'ltr';
        $this->decimalSeparator = '.';
        $this->groupSeparator = ',';
        $this->currencyFormat = '¤%f';
        $this->currencyNegativeFormat = '(¤%f)';
        $this->language = 'yue';
        $this->locale = 'yue-Hans-CN';
        $this->firstDayWeek = 1;
        $this->longDate = 'Y年n月j日';
        $this->shortDate = 'Y年n月j日';
        $this->longTime = 'Ag:i:s';
        $this->shortTime = 'Ag:i';
        $this->dateTime = '%date% %time%';
        $this->amString = '上午';
        $this->pmString = '下午';
        $this->nameEnglish = 'English';
        $this->nameNative = 'English';
    }
        
    public function months($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      1 => '1月',
                      2 => '2月',
                      3 => '3月',
                      4 => '4月',
                      5 => '5月',
                      6 => '6月',
                      7 => '7月',
                      8 => '8月',
                      9 => '9月',
                      10 => '10月',
                      11 => '11月',
                      12 => '12月',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      1 => '1',
                      2 => '2',
                      3 => '3',
                      4 => '4',
                      5 => '5',
                      6 => '6',
                      7 => '7',
                      8 => '8',
                      9 => '9',
                      10 => '10',
                      11 => '11',
                      12 => '12',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      1 => '一月',
                      2 => '二月',
                      3 => '三月',
                      4 => '四月',
                      5 => '五月',
                      6 => '六月',
                      7 => '七月',
                      8 => '八月',
                      9 => '九月',
                      10 => '十月',
                      11 => '十一月',
                      12 => '十二月',
                    );
        }
    }

        public function weekDays($type = i18n_Locale::TYPE_WIDE): array{
        switch($type) {
            case i18n_Locale::TYPE_ABBREVIATED:
                return array (
                      0 => '周日',
                      1 => '周一',
                      2 => '周二',
                      3 => '周三',
                      4 => '周四',
                      5 => '周五',
                      6 => '周六',
                    );
            case i18n_Locale::TYPE_NARROW:
                return array (
                      0 => '日',
                      1 => '一',
                      2 => '二',
                      3 => '三',
                      4 => '四',
                      5 => '五',
                      6 => '六',
                    );
            case i18n_Locale::TYPE_WIDE:
                return array (
                      0 => '星期日',
                      1 => '星期一',
                      2 => '星期二',
                      3 => '星期三',
                      4 => '星期四',
                      5 => '星期五',
                      6 => '星期六',
                    );
        }
    }

        public function intervals(): array{
                    return array (
              'year' => '{n, plural, other {# 年}}',
              'month' => '{n, plural, other {# 个月}}',
              'week' => '{n, plural, other {# 周}}',
              'day' => '{n, plural, other {# 天}}',
              'hour' => '{n, plural, other {# 小时}}',
              'minute' => '{n, plural, other {# 分钟}}',
              'second' => '{n, plural, other {# 秒}}',
              'millisecond' => '{n, plural, other {# 毫秒}}',
              'microsecond' => '{n, plural, other {# 微秒}}',
              'nanosecond' => '{n, plural, other {# 奈秒}}',
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
