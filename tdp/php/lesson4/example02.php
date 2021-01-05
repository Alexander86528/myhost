<?php

$minutes = rand(0, 59);

echo $minutes . PHP_EOL;
if ($minutes >= 0 && $minutes <= 14) {
    echo 'first quarter' . PHP_EOL;
}
if ($minutes >= 15 && $minutes <= 29) {
    echo 'second quarter' . PHP_EOL;
}
if ($minutes >= 30 && $minutes <= 44) {
    echo 'third quarter' . PHP_EOL;
}
if ($minutes >= 45 && $minutes <= 59) {
    echo 'fourth quarter' . PHP_EOL;
}
