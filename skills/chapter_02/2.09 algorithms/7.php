<pre>
<?php

$matrix = [];
$size = 5;
$randNumber = 10;

for ($i = 0; $i < $size; $i++){
    for ($j = 0; $j < $size; $j++){
        $matrix[$i][$j] = rand(0, $randNumber);
    }
}
print_r($matrix);

$sum = 0;
foreach ($matrix as $line){
    foreach ($line as $number){
        $sum = $sum + $number;
    }
}
echo 'summa = ' . $sum . "\n";


?>
</pre>