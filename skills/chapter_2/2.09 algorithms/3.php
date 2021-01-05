<pre>
<?php

//option 1
$value = rand();
var_dump($value);

$counts = [];
for ($i=0; $i<10; $i++){
   $counts[] = 0;
}
//print_r($counts);

$v1 = $value;
while ($v1 > 0){
    $counts[$v1 % 10]++;
    $v1 = (int)($v1 / 10);
}
print_r($counts);

//option 2
$v2 = str_split((string)$value);
//print_r($v2);
$counts = [];
for ($i=0; $i<10; $i++){
    $counts[] = 0;
}
//print_r($counts);

foreach ($v2 as $var)
    $counts[$var]++;
print_r($counts);
?>
</pre>