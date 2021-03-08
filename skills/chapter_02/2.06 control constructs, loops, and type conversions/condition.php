<pre>
<?php

$a = 11;
if($a > 10 && $a <= 20)
{
    $a *= $a;
    var_dump("Возвели в квадрат");
}elseif($a > 20 && $a < 30){
    $a = $a * $a * $a;
    var_dump("Мы возвели в куб");
}else{
    $a += 5;
    var_dump("Мы прибавили пять!");
}
var_dump($a);

?>
</pre>