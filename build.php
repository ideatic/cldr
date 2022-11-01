<?php

require 'vendor/autoload.php';

$builder = new i18n_Builder_Locale();

$builder->build(__DIR__ . '/src/i18n/Locale');