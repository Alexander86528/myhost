<?php
/*
С помощью цикла найдите сумму чисел от 1 до 100.
*/
$i = 1;
$result = 0;
while ($i <= 100) {
    $result += $i;
    $i++;
}
echo "\$result = $result <br>";
echo "<br>";

for ($i = 1, $result = 0; $i <= 100; $i++) {
    $result += $i;
}
echo "\$result = $result <br>";
