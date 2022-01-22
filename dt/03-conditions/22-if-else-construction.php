<?php
echo "<h2>task 1; task 2; task 3; task 4:</h2>";

$test = rand(9, 10);
//echo "$test\n";
if ($test > 10) {
  echo "$test > 10";
} elseif ($test == 10) {
    echo "$test == 10"; 
} else {
    echo "$test < 10";
}
