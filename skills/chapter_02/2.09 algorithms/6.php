<pre>
<?php
$data = [];
$numb = 10;
for ($i = 0; $i < $numb; $i++){
    $data[] = rand(0, 10);
}
print_r($data);

$index = 0;
$max = $data[0];
foreach ($data as $i => $value){
    if ($value > $max){
        $max = $value;
        $index = $i;
    }
}
echo 'max = ' . $max . "\n";
echo 'index = ' . $index . "\n";

?>
</pre>
