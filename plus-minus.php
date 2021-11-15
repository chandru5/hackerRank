<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $pos = 0;
    $neg = 0;
    $zer = 0;
    $len = count($arr);
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]>0){
            $pos = $pos+1;
        } else if($arr[$i]<0){
            $neg = $neg+1;
        } else {
            $zer = $zer+1;
        }
    }
    echo round($pos/$len, 6)."\n";
    echo round($neg/$len, 6)."\n";
    echo round($zer/$len, 6)."\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
