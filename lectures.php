<?php

use Webmozart\Assert\Assert;
require_once __DIR__ . '/vendor/autoload.php';

/*
* Зачем и как писать тесты
*/
print_r("\n\nЗачем и как писать тесты\n");

// function capitalize($text)
// {
//     $firstSymbol = strtoupper($text[0]);
//     $restSubstring = substr($text, 1);
//     return "{$firstSymbol}{$restSubstring}";
// }
// if (capitalize('hello') !== 'Hello') { // Если результат функции не равен ожидаемому значению,
//     // выбрасываем исключение и завершаем выполнение теста
//     throw new Exception('Функция работает неверно!');
//   }

function capitalize($text)
{
    if ($text === '') {
        return '';
    }
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
if (capitalize('') !== '') {
    throw new Exception('Функция работает неверно!');
}


/*
* Asserts
*/
print_r("\n\nAsserts\n");



// eq означает equal
Assert::eq(capitalize(''), '');
// Первый параметр actual – то, что пришло
// Второй параметр expected – то, что ожидает тест
// Правильный порядок аргументов имеет большое значение при анализе ошибки
Assert::eq(capitalize('hello'), 'Hello');
