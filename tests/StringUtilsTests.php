<?php

namespace StringUtils\Tests;

$autoloadPath1 = __DIR__ . '/../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function StringUtils\capitalize;

if (capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('hello') !== 'Hello') {
        throw new \Exception('Функция работает неверно!');
}
