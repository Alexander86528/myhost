<pre>
<?php

// 1. Создайте массив numbers с тремя значениями - любыми целыми числами
$numbers = [1, 2, 3, ];

var_dump($numbers);
echo 'count($numbers) = ' . count($numbers) . PHP_EOL;

echo 'for:' . PHP_EOL;
for ($i = 0; $i < count($numbers); ++$i) {
    echo '$i[' . $i . ']' . ' = ' . $numbers[$i] . PHP_EOL;
}
echo '$i = ' . $i . PHP_EOL;

echo 'foreach:' . PHP_EOL;
foreach ($numbers as $key) {
    echo $key . PHP_EOL;
}
