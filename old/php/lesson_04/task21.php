<?php
/*
В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
*/
$month = rand(1, 12);
var_dump($month);

if ($month >= 3 and $month <= 5) {
    var_dump('Spring');
} elseif ($month >= 6 and $month <= 8) {
    var_dump('Summer');
} elseif ($month >= 9 and $month <= 11) {
    var_dump('Autumm');
} else {
    var_dump('Winter');
}
