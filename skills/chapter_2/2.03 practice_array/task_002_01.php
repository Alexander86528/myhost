<pre>
<?
/*
Создайте массив matrix целых чисел от 1 до 9 в виде матрицы 3х3
*/

$matrix = [
    [1, 2, 3, ],
    [4, 5, 6, ],
    [7, 8, 9, ],
];

print_r($matrix);

//var_dump($matrix);
foreach ($matrix as $key => $values) {
    foreach ($values as $key => $value) {
        echo $key . ' => ' . $value . '; ';
    }
    echo PHP_EOL;
}

foreach ($matrix[1] as $k => $v) {
    echo $k . ' => ' . $v . PHP_EOL;
}
