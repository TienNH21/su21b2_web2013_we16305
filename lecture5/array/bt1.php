<?php

$arr = [ 1, 4, 7, 2, 9, 8, 6 ];
$arr1 = [ 1, 4, 7, 2, 9, 8, 6 ];
$arr2 = [ 1, 4, 7, 2, 9, 8, 6 ];

function findMax(array $arr): int {
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }

    return $max;
}

function findMin(array $arr): int {
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }

    return $min;
}

echo findMax($arr1);
echo "<br>";
echo findMin($arr2);
