<?php

session_start();

require_once './../../db/khach_hang.php';

$id = intval( $_GET['id'] );
$data = findById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/we16305/bootstrap.min.css" />
</head>
<body>
    <?php
    if ( isset($_SESSION['error']) ) {
        echo $_SESSION['error'];
        unset( $_SESSION['error'] );
    }
    ?>
    <form
        class="col-8 offset-2" method="POST"
        action="/we16305/src/admin/users/update.php">
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        <div class="mt-3">
            <label>Mã</label>
            <input
                value="<?php echo $data['ma'] ?>"
                class="form-control"
                type="text"
                name="ma" />
        </div>
        <div class="mt-3">
            <label>Tên</label>
            <input
                value="<?php echo $data['ten'] ?>"
                class="form-control"
                type="text"
                name="ten" />
        </div>
        <div class="mt-3">
            <label>Email</label>
            <input
                value="<?php echo $data['email'] ?>"
                class="form-control"
                type="email"
                name="email" />
        </div>
        <div class="mt-3">
            <label>SDT</label>
            <input
                value="<?php echo $data['sdt'] ?>"
                class="form-control"
                type="number"
                name="sdt" />
        </div>
        <div class="mt-3">
            <label>Địa chỉ</label>
            <input
                value="<?php echo $data['sdt'] ?>"
                class="form-control"
                type="text"
                name="dia_chi" />
        </div>
        <div class="mt-3">
            <label>Giới tính</label>
            <select name="gioi_tinh" class="form-control">
                <option
                    <?php echo $data['gioi_tinh'] == 0 ? "selected" : "" ?>
                    value="0"
                >
                    Nữ
                </option>
                <option
                    <?php echo $data['gioi_tinh'] == 1 ? "selected" : "" ?>
                    value="1"
                >
                    Nam
                </option>
            </select>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/we16305/src/admin/users/index.php" class="btn btn-default">Cancel</a>
        </div>
    </form>
</body>
</html>
