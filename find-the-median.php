<?php

/*
 * Complete the 'Find Median' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
function findMedian($arr) {
    $arr = quickSort($arr);

    $size = sizeof($arr);
    return $arr[$size/2];
}

function quickSort($ar) {

    if (sizeof($ar) <= 1 ){
        return $ar;
    }

    $left = array();
    $right = array();
    $p = $ar[0];

    $size = sizeof($ar);
    for ($i=1; $i < $size; $i++) {
        if ($p < $ar[$i]) {
            $right[] = $ar[$i];
            continue;
        }

        $left[] = $ar[$i];
    }

    return merge(quickSort($left),quickSort($right), $p);
}

function merge($left, $right, $p) {
    $left[] = $p;
    foreach ($right as $value) {
        $left[] = $value;
    }
    return $left;
}

/**
 * Sample #1
 */
$arr = array(0, 1, 2, 4, 6, 5, 3);

$result = findMedian($arr);
echo $result;
