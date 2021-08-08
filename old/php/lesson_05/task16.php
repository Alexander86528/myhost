
<pre>
<?php

/*
16. Составьте массив дней недели.
С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
Текущий день должен храниться в переменной $day.
*/
$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday',
];

$day = date("l");
echo "today: $day \n";
echo PHP_EOL;

foreach ($days as $value) {
    if ($value == $day) {
        echo "<i><b>$value</b></i> \n";
    } else {
        echo "$value \n";
    }
}

/*
foreach ($days as $value) {
    if ($value == date("l")) {
        echo "<i><b>$value</b></i> \n";
    } else {
        echo "$value \n";
    }
}
*/
