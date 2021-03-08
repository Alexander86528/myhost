<pre>
<?php
/*
Выведите центральный элемент (на строке 2 в столбце 2) из этой матрицы
*/
$matrix = [
    [1, 2, 3, ],
    [4, 5, 6, ],
    [7, 8, 9, ],
];
foreach ($matrix[1] as $value) {
    echo "$value" . ' ';
}
echo PHP_EOL;
echo $matrix[1][1] . "\n";

