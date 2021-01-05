<?php

$n = 1;
$m = 4;
//manual printf
printf("%2$0d %1$04b \n", $n, $n);
printf("%1$0d  %2$04b \n", $m, $m);



echo 'Побитовое И (AND)' . PHP_EOL;
printf("%1$0d  %2$04b \n", $n, $n);
printf("%1$0d  %2$04b \n", $m, $m);
$result = $n & $m;
printf("%1$0d  %2$04b \n", $result, $result);


echo 'Побитовое ИЛИ (OR)' . PHP_EOL;
printf("%1$0d  %2$04b \n", $n, $n);
printf("%1$0d  %2$04b \n", $m, $m);
$result = $n | $m;
printf("%1$0d  %2$04b \n", $result, $result);

echo 'Побитовое ИЛИ(исключающее) (XOR)' . PHP_EOL;
printf("%1$0d  %2$04b \n", $n, $n);
printf("%1$0d  %2$04b \n", $m, $m);
$result = $n ^ $m;
printf("%1$0d  %2$04b \n", $result, $result);


echo 'Побитовое ~ (отрицание)' . PHP_EOL;
printf("%1$0d  %2$04b \n", $n, $n);
printf("%1$0d  %2$04b \n", $m, $m);
$result1 = ~$n;
$result2 = ~$m;

printf("%1$0d  %2$04b \n", $result1, $result1);
printf("%1$0d  %2$04b \n", $result2, $result2);
