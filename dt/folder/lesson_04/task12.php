<?php
/*
Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'.
*/
$arrayTest = [3, null];
$a = $arrayTest[rand(0, 1)];
var_dump($a);

if (!isset($a)) {
    echo 'true';
} else {
    echo 'false';
}
