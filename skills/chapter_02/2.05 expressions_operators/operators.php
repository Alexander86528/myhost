<pre>
<?php

$a = 10;
$b = 5;
var_dump($a);
$d = $c = 'string';
var_dump($c);
var_dump($d);
//$d = $c = 50 = $c; Ошибка!
echo "\n";

// Оператор отрицания (-)
var_dump(-$a);
var_dump($a);
echo "\n";

//Оператор сложения (+)
$sum = $a + $b;
$sum1 = $a + 10;
$sum2 = 10 + 15;
var_dump($sum);
var_dump($sum1);
var_dump($sum2);
echo "\n";

//Оператор вычитания(-)
$dec = $a - $b;
$dec1 = $a - 10;
$dec2 = 10 -15;
var_dump($dec);
var_dump($dec1);
var_dump($dec2);
echo "\n";

//Оператор умножения(*)
$mul = $a * $b;
$mul1 = $a * 10;
$mul2 = 15 * 10;
var_dump($mul);
var_dump($mul1);
var_dump($mul2);
echo "\n";

//Оператор деления (/)
$div = $a / $b;
$div1 = $a / 10;
$div2 = 15 / 10;
var_dump($div);
var_dump($div1);
var_dump($div2);
echo "\n";

//Оператор деления по модулю (%)
$a = 10;
$b = 7;
$c = $a % $b;
$c1 = $a % 4;
$c2 = 15 % 8;
var_dump($c);
var_dump($c1);
var_dump($c2);
echo "\n";



?>
</pre>