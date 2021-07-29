<p>lesson 06 task 13</p>
<p> 
13. Дано число, например 30.<br>
У этого числа есть делители - числа, на которое оно делится без остатка.<br>
Делители числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30. <br>
Задача: сделайте массив делителей нашего числа. <br>
Число может быть любым, не обязательно, 30.<br>
</p>

<?php

$number = mt_rand(1, 30);
$amountDivisors = 0;
$arrayDivisors = [];

var_dump($number);
var_dump($amountDivisors);
echo '<br>';

for ($i = 1; ($i <= $number); $i++) {
    if ($number % $i == 0) {
        $amountDivisors++;
        $arrayDivisors[] = $i;
    }
}
echo '$amountDivisors = ' . $amountDivisors . '<br>';
var_dump($arrayDivisors);
