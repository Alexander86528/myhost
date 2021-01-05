<pre>
<?php

echo 'PHP_INT_SIZE = ' . PHP_INT_SIZE . PHP_EOL;
echo 'PHP_INT_MAX = ' . PHP_INT_MAX . PHP_EOL;
echo 'PHP_INT_MIN = ' . PHP_INT_MIN . PHP_EOL;
/*
Если PHP обнаружил, что число превышает размер типа integer,
он будет интерпретировать его в качестве float. 
Аналогично, если результат операции лежит за границами типа integer, 
он будет преобразован в float.
*/
$large_number = 9223372036854775807;
var_dump($large_number);
$large_number += 1;
var_dump($large_number);

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number);    

/*
В PHP не существует оператора деления целых чисел. 
*/
var_dump(22/7);
var_dump((int)(22/7));
// Ошибка!
echo (int)((0.1 + 0.7) * 10) . PHP_EOL;
