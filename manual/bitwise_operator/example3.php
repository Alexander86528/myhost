<pre>
<?php

//manual побитовый сдвиг над целыми числами.

echo " Сдвиг вправо над положительным целым \n";
$val = 4;
$places = 1;
$res = $val >> $places;
printf("\$val : int = %1$0d  bin = %1$04b \n", $val, $val);
printf("\$places = %1$0d \n", $places);
printf("\$res : int = %1$0d  bin = %1$04b \n\n", $res, $res);

$val = 4;
$places = 2;
$res = $val >> $places;
printf("\$val : int = %1$0d  bin = %1$04b \n", $val, $val);
printf("\$places = %1$0d \n", $places);
printf("\$res : int = %1$0d  bin = %1$04b \n\n", $res, $res);

$val = 4;
$places = 3;
$res = $val >> $places;
printf("\$val : int = %1$0d  bin = %1$04b \n", $val, $val);
printf("\$places = %1$0d \n", $places);
printf("\$res : int = %1$0d  bin = %1$04b \n\n", $res, $res);

$val = 4;
$places = 4;
$res = $val >> $places;
printf("\$val : int = %1$0d  bin = %1$04b \n", $val, $val);
printf("\$places = %1$0d \n", $places);
printf("\$res : int = %1$0d  bin = %1$04b \n\n", $res, $res);

print "Сдвиг вправо над отрицательными целыми числами \n";
