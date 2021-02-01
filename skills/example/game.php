<?php

require('lib.php');

$secret = file_get_contents('secret.txt');
//var_dump($secret);

//$ok = file_put_contents('secret.txt, $secret');

$try = $argv[1];
//var_dump($argv[1]);

if($secret === $try){
    echonl("win!");
}else{
    $try_digits = str_split($try);
    $sec_digits = str_split($secret);

    $bulls = 0;
    $cows = 0;
    foreach ($try_digits as $k => $digit) {
        foreach($sec_digits as $k2 => $digit2){
            if($digit == $digit2){
                $bulls++;
            
                if($k == $k2){
                    $cows++;
                }
            }
        }
    }
    var_dump($bulls);
    var_dump($cows);
}
