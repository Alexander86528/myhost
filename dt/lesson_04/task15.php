<?php
/*
Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
*/
//$arrayTest = [-3, 0, 2, 5,];
//$a = $arrayTest[rand(0,3)];
$a = rand(-3, 7);

var_dump($a);
if ($a > 0 and $a <5) {
    var_dump('true');
} else {
    var_dump('false');
}
