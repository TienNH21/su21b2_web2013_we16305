<?php

// Khởi tạo kết nối
function getConnection() {
    $dbUrl = "mysql: host=localhost; dbname=we16305; port=3306";
    $dbUser = "root";
    $dbPass = "";
    $connection = new PDO($dbUrl, $dbUser, $dbPass);
    return $connection;
}
