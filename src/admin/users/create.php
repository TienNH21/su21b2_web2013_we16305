<?php

session_start();

require_once './../../db/khach_hang.php';

// Nhận dữ liệu & lưu vào db
$data = [
    'ma' => $_POST['ma'],
    'ten' =>  $_POST['ten'],
    'email' =>  $_POST['email'],
    'sdt' =>  $_POST['sdt'],
    'dia_chi' =>  $_POST['dia_chi'],
    'gioi_tinh' =>  $_POST['gioi_tinh'],
];

if (
    empty( $data['ma'] ) == true ||
    empty( $data['ten'] ) == true ||
    empty( $data['email'] ) == true ||
    empty( $data['sdt'] ) == true ||
    empty( $data['dia_chi'] ) == true ||
    empty( $data['gioi_tinh'] ) == true
) {
    $error = "Không được để trống";
    $_SESSION['error'] = $error;
    header("Location: /we16305/src/admin/users/form_create.php");
    die;
}

insert($data);

header("Location: http://localhost/we16305/src/admin/users/index.php");
