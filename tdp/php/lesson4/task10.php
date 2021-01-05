<?php
/*
Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'.
*/
$arrEmpty = [1, 3, -3, 0, null, true, '', '0', $ar = [], false];
$a = $arrEmpty[rand(0, 9)];
var_dump($a);

if (!empty($a)) {
    echo 'true' . PHP_EOL;
} else {
    echo 'false' . PHP_EOL;
}
