<?php

$finder = PhpCsFixer\Finder::create()
    ->in('../check-me');

$config = new PhpCsFixer\Config();

return
    $config
        ->setRiskyAllowed(true)
        ->setRules([
        /* @PHP74Migration */
        '@PHP74Migration:risky' => true
        /* '@PHP80Migration' => true, */
        /* '@PHP80Migration:risky' => true, */
        /* '@PHP81Migration' => true, */
        /* '@PHP82Migration' => true, */
        /* 'method_argument_space' => false, */
        /* 'heredoc_indentation' => false, */
        /* 'octal_notation' => false, */
        /* 'ternary_to_null_coalescing' => false, */
        /* 'declare_strict_types' => false, */
        /* 'void_return' => false, */
        /* 'trailing_comma_in_multiline' => false, */
        /* 'visibility_required' => false */
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
