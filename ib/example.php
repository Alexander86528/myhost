<?php
  echo "expert lesson 2\n";
  echo '<br>';
  $x = true;
  echo $x; // 1
  echo '<br>';
  $x = false;
  echo $x; // ""
  echo "\n";
  
  echo $y;
  var_dump($y);
  echo '<br>';

  setlocale(LC_ALL, "russian");
  $js = "php";
  echo "string {$js}";
  echo "<br>";

  $str = 'Ttttt sssssss?';
  var_dump($str);
  echo "<br>";

  $first = $str[6];
  var_dump($first);
  echo "<br>";

  $len = strlen($str);
  var_dump($len);
  echo "<br>";
  
  echo $str[strlen($str) - 1];
  echo "<br>";
  $z = true;
  echo $z * 10;