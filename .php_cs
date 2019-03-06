<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(false)
    ->setRules([
        'array_syntax' => ['syntax' => 'short'],
        '@Symfony' => true,
        '@PSR2' => true,
        'phpdoc_to_comment' => false,
        'concat_space' => ['spacing' => 'one'],
        'ordered_imports' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/lib')
            ->in(__DIR__ . '/spec')
    )
;
