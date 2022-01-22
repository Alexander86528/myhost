<?php
echo 'task 06' . PHP_EOL;
echo 'Проверьте то, что переменная $test не равна 10.' . PHP_EOL;

$test = mt_rand(9, 10);
print($test . PHP_EOL);
if ($test != 10){
  echo '$test != 10' . PHP_EOL;
} else {
  echo '$test == 10' . PHP_EOL;
}