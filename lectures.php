<?php


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
