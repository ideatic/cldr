<?php

require 'vendor/autoload.php';

$builder = new i18n_Builder_Locale();

$outputDir = __DIR__ . '/src/i18n/Locale';
IO::delete($outputDir, true);

$builder->build($outputDir, version: '42');