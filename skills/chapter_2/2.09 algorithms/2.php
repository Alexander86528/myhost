
<?php
//Посчитать сумму всех цифр в числе
$value = $number = 12345;
$sum = 0;
while ($number > 0){
    $sum += $number % 10;
    $number = (int) ($number / 10);
}
echo  "Сумма цифр в числе $value равна: $sum" . '<br>';

$sum1 = array_sum(str_split((string)$value));
echo  "Сумма цифр в числе $value равна: $sum1 ";


