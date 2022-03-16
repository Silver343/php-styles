<?php

namespace Silver343;

use PhpcsFixer\Config;
use PhpCsFixer\Finder;

function styles(Finder $finder, array $rules = []): Config {
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return (new Config)
      ->setFinder($finder)
      ->setRiskyAllowed(true)
      ->setRules($rules);
}
