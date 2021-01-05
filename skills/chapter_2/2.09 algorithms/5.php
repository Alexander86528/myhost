<pre>
<?php

$data = [];
$ind = 10;

for ($i = 0; $i < $ind; $i++){
    $data[] = rand(0, 100);
}
print_r($data);

$lastItem = array_pop($data);
array_unshift($data, $lastItem);
print_r($data);

?>
</pre>
