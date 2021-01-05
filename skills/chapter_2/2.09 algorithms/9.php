<pre>
<?php

//сортировка "пузырьком"
$data = [];
for ($i = 0; $i < 10; $i++){
    $data[] = rand(0, 10);
}
print_r($data);
echo implode(' ', $data) . '<br>';

for($i =0; $i < count($data); $i++){
    for ($j = 0; $j < count($data); $j++){
        if($data[$j] > $data[$i]){
            $tmp = $data[$j];
            $data[$j] = $data[$i];
            $data[$i] = $tmp;
        }
    }
}
echo implode(' ', $data) . '<br>';

?>
</pre>
