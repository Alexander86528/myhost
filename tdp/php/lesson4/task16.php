<?php
/*
Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10. Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
*/
$arrayTest = [-3, 0, 2, 5];
$a = $arrayTest[rand(0, 3)];

var_dump($a);
if ($a == 0 or $a == 2) {
    $a += 7;
} else {
    $a /= 10;
}
var_dump($a);
