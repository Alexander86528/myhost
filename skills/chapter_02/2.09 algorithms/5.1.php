<pre>
<?php
$data = [];
$index = 20;

for ($i = 0; $i < $index; $i++){
    $data[] = rand(0, 100);
}
print_r($data);

for ($i = count($data) - 1; $i > 0; $i--){
    $tmp = $data[$i];
    $data[$i] = $data[$i - 1];
    $data[$i - 1] = $tmp;
}
print_r($data);


?>
</pre>