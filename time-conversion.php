<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here

    $time= explode(":", $s);
    $pos = strpos(end($time), 'PM');

    $hr;
    $min;
    $sec;

    if ($pos === false) {
        $hr= ($time[0] == 12) ? '00' : $time[0];
        $min= $time[1];
        $t= intval(end($time));
        $sec= ($t<10) ? "0$t": $t;
    }
    else
    {
        $hr= ($time[0] == 12) ? 12 : 12+$time[0];
        $min= $time[1];
        $t= intval(end($time));
        $sec= ($t<10) ? "0$t": $t;
    }
    return $hr.':'.$min.':'.$sec;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
