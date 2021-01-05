<pre>
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as $value){
    var_dump($value);
}
echo "\n";

foreach ($arr as $key => $value){
    echo  'key ' . $key . "\t";
    echo 'value ' . $value . "\n";
    echo "\n";
}


?>
</pre>