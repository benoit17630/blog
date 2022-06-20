<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@symfony'=> true,
    'yoda_style'=> false,
])
    ->setFinder($finder)
    ;