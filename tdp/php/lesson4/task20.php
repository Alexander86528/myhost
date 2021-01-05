<?php
/*
В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает это число (в первую, вторую или третью).
*/
$day = rand(1, 31);
var_dump($day);

if ($day >= 1 and $day <= 10) {
    echo 'the first decade';
} elseif ($day >= 11 and $day <= 20) {
    echo 'second decade';
} else {
    echo 'third decade';
}
