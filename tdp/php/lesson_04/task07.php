<?php
/*
Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3
*/
$array = ['test', 'тест', 3];
$a = $array[rand(0, 2)];

echo '$a = ' . $a . '<br> if ($a == test) <br>';
if ($a == 'test') {
    echo 'true <br>';
} else {
    echo 'false <br>';
}
