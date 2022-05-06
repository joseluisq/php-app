<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . DIRECTORY_SEPARATOR . 'config',
        __DIR__ . DIRECTORY_SEPARATOR . 'controllers',
        __DIR__ . DIRECTORY_SEPARATOR . 'core',
        __DIR__ . DIRECTORY_SEPARATOR . 'database',
        __DIR__ . DIRECTORY_SEPARATOR . 'public',
        __DIR__ . DIRECTORY_SEPARATOR . 'routes',
        __DIR__ . DIRECTORY_SEPARATOR . 'tests',
    ])
    ->append(['boostrap.php', '.php-cs-fixer.dist.php']);

$rules = [
    '@Symfony'               => true,
    'phpdoc_no_empty_return' => false,
    'array_syntax'           => ['syntax' => 'short'],
    'yoda_style'             => false,
    'binary_operator_spaces' => [
        'operators' => [
            '=>' => 'align',
            '='  => 'align',
        ],
    ],
    'concat_space'            => ['spacing' => 'one'],
    'not_operator_with_space' => false,
];

$rules['increment_style'] = ['style' => 'post'];

return (new PhpCsFixer\Config())
    ->setUsingCache(true)
    ->setRules($rules)
    ->setFinder($finder);
