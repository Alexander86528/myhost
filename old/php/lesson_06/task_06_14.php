<p>
Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. 
Узнайте, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10.
</p>

<?php
$array10 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//var_dump($array10);
//echo count($array10);
/*
for ($i = 0, $count = 0; $i < count($array10); $i++) {
    echo $i . '<br>';
    if ($count > 10) {
        break;
    }
    $count = $count + $array10[$i];
}
//echo '$count = ' . $count . '<br>';
echo '$count_i = ' . $i . '<br>';
*/
$count = 0;
$sum = 0;
foreach ($array10 as $v) {
    $count++;
    $sum += $v;
    if ($sum > 10) {
        break;
    }
}
echo $count;