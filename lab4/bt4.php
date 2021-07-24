<?php

require_once './../libs/utils.php';

$arr = [];

for ($i=0; $i < 20; $i++) {
    $arr[] = rand(1, 100);
}

printArray($arr);

function average(array $a): float {
    $sum = 0;

    foreach ($a as $key => $value) {
        $sum += $value;
    }

    return $sum / count($a);
}

echo "Giá trị trung bình: " . average($arr) . "<br>";

function findMin(array $a, int $number = 1): array {
    if ( count($a) === 0 ) {
        return [];
    }

    $result = [];
    $count = 0;
    while ($count <= $number && count($a) > 0) {
        $count++;

        $viTriMin = -1;
        $min = NULL;
        foreach ( $a as $key => $value ) {
            if ($value < $min || $min === NULL) {
                $viTriMin = $key;
                $min = $value;
            }
        }

        $result[] = $viTriMin;
        unset($a[$viTriMin]);
    }

    return $result;
}

$kqTimMin = findMin($arr, 5);
printArray($kqTimMin);
