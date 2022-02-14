<?php

namespace StringUtils\Tests;

use Webmozart\Assert\Assert;

use function StringUtils\capitalize;

$autoloadPath1 = __DIR__ . '/../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}



Assert::eq(capitalize(''), '');

Assert::eq(capitalize('hello'), 'Hello');
