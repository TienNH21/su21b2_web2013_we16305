<?php

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

insert($data);

header("Location: http://localhost/we16305/src/admin/users/index.php");
