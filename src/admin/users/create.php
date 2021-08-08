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

// $_GET, $_POST, $_SESSION, $_FILES
$fileUpload = $_FILES['avatar'];

/*
 * 1. Kiểm tra định dạng file
 * 2. Kiểm tra dung lượng file
 * 3. Lưu trữ file
 */

// 1. Kiểm tra định dạng file
if (strpos($fileUpload["type"], 'image') === false) {
    // File upload không phải là ảnh -> báo lỗi
    $_SESSION['error'] = "Avatar phải là ảnh";
    header("Location: /we16305/src/admin/users/form_create.php");
    die;
}

// 2. Kiểm tra dung lượng file: file ảnh dưới 3M -> 3  * 1000 * 1000 -> 3,000,000
if ($fileUpload["size"] > 3000000) {
    // File upload vượt quá dung lượng cho phép
    $_SESSION['error'] = "Avatar phải nhỏ hơn 3M";
    header("Location: /we16305/src/admin/users/form_create.php");
    die;
}

/*
 * B3: Lưu trữ file
 * Lưu ảnh vào thư mục images, lưu đường dẫn vào db
 */

$storePath = './../../images/';
$filename = $fileUpload['name'];
$path = $storePath . $filename;
move_uploaded_file($fileUpload['tmp_name'], $path);

$data['avatar'] = '/we16305/src/images/' . $filename;

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
