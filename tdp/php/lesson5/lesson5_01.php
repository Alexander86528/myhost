
<?php
/*
Цикл foreach имеет альтернативный синтаксис:
*/
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5,];

foreach ($arr as $elem):
    echo $elem;
endforeach;

//Как работать с HTML
foreach ($arr as $elem) {
?>
    <p><?php echo $elem;?></p>
<?php
}
//Альтернативный синтаксис (удобен при работе с html, так как не нужны фигурные скобки):
foreach ($arr as $elem):
?>
    <p><?php echo $elem ?></p>
<?php
endforeach;
