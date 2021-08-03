<?php

require_once './../../db/khach_hang.php';

$id = intval( $_GET['id'] );
deleteById($id);

header("Location: http://localhost/we16305/src/admin/users/index.php");
