<pre>

<?php

/*
Дано число $num=1000.
Делите его на 2 столько раз, пока результат деления не станет меньше 50.
Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла).
Решите задачу сначала через цикл while, а потом через цикл for.
*/
$num = 1000;
$i = 0;
while ($num > 50) {
    $num = (int)$num / 2;
    $i++;
}
echo "$num ; $i \n";

$num = 1000;
for ($i = 0; $num > 50; $i++) {
    $num = (int)$num / 2;
}
echo "$num ; $i \n";
