<?php
echo 'Даны переменные $test1 и $test2.' . PHP_EOL . 'Проверьте, значение какой из этих переменных больше и выведите соответствующее сообщение на экран.' . PHP_EOL;
$test1 = mt_rand(0, 1);
$test2 = mt_rand(0, 1);

echo $test1 . PHP_EOL . $test2 . PHP_EOL;

if ($test1 > $test2){
  echo '$test1 > $test2' . PHP_EOL;
} elseif ($test2 > $test1){
    echo '$test2 > $test1' . PHP_EOL;
} else {
    echo '$test1 == $test2' . PHP_EOL;
}