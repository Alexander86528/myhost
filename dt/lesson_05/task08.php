<?php
/*
Выведите столбец четных чисел в промежутке от 0 до 100.
*/
$i = 1;
while ($i <= 100) {
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
    $i++;
}
echo "<br>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo " $i <br>";
    }
}