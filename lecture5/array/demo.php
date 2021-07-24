<?php

$arr1 = [ 4, 1, 7, 9 ];

echo $arr1[0] . "<br>";
echo $arr1[1] . "<br>";

$arr2 = [
    'lop' => 'WE16305',
    'ca' => 1,
];

$arr3 = array(1, 3, 5, 6);
$arr4 = array(
    'mon_hoc' => 'PHP 1',
    'hoc_ky' => 'SU2021',
);

$arr2Chieu = [
    [1, 4, 9], // 0
    [6, 7, 2], // 1
    [9, 8, 5], // 2
];

echo $arr2Chieu[0][1];

// Thêm ptu vào mảng
// C1: Thêm phần tử vào vị trí cuối cùng của mảng
$arr3[] = 101;
$arr2['sy_so'] = 40;

// C2: array_push
array_push( $arr3, 8, 9, 10, 11, 12, 13, 14, 15 );

unset($arr2['sy_so']);

echo "<br>";
echo array_pop( $arr3 );
echo "<br>";
var_dump( $arr3 );