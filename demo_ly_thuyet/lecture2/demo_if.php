<?php

$diem = [
    'lab_1' => 7,
    'lab_2' => 8,
    'lab_3' => 6,
    'lab_4' => 4,
    'lab_5' => 9,
    'lab_6' => 8,
    'lab_7' => 7,
    'lab_8' => 8,
    'assignment' => 7,
];

if ($diem['assignment'] < 5) {
    echo "Không đủ điều kiện dự thi";
} else if ($diem['assignment'] < 7) {
    echo "Sinh viên trung bình";
} else if ($diem['assignment'] < 8) {
    echo "Sinh viên khá";
} else {
    echo "Sinh viên ong vàng";
}

echo "<br>";

/*
A -> Ong vàng
B -> SV giỏi
C -> SV khá
D -> SV TB
F -> Chưa qua môn
*/
$diemTK = 'B';

switch ($diemTK) {
    case 'A':
        echo "Ong vàng";
        break;

    case 'B':
        echo "Học lực giỏi";
        break;

    case 'C':
        echo "Học lực khá";
        break;

    case 'D':
        echo "Học lực trung bình";
        break;

    case 'F':
        echo "Chưa qua môn";
        break;

    default:
        # code...
        break;
}
