<?php
/**
 * This file is part of the sxbrsky/sales-platform.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests'
    ])
    ->append([__FILE__])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
;

$config = new PhpCsFixer\Config();
$config->setFinder($finder)
    ->setRules([
        '@PSR12' => true
    ])
;

return $config;