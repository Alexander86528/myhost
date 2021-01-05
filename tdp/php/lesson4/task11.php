<pre>
<?php
/*
Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 3 и null.
*/
$arrayTest = [3, null];
$a = $arrayTest[rand(0, 1)];

var_dump($a);

if (isset($a)) {
    echo 'true' . "\n";
} else {
    echo 'false' . "\n";
}
