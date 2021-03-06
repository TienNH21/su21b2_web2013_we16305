<?php session_start(); ?>

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
    <div class="col-8 offset-2">
        <?php
        if ( isset($_SESSION['error']) ) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
        <!-- Hiển thị giao diện cho người dùng nhập -->
        <form
            method="POST"
            action="/we16305/src/admin/users/create.php"
            enctype="multipart/form-data"
        >
            <div class="mt-3">
                <label>Mã</label>
                <input class="form-control" type="text" name="ma" />
            </div>
            <div class="mt-3">
                <label>Tên</label>
                <input class="form-control" type="text" name="ten" />
            </div>
            <div class="mt-3">
                <label>Email</label>
                <input class="form-control" type="email" name="email" />
            </div>
            <div class="mt-3">
                <label>SDT</label>
                <input class="form-control" type="number" name="sdt" />
            </div>
            <div class="mt-3">
                <label>Địa chỉ</label>
                <input class="form-control" type="text" name="dia_chi" />
            </div>
            <div class="mt-3">
                <label>Avatar</label>
                <input
                    class="form-control"
                    type="file"
                    name="avatar"
                />
            </div>
            <div class="mt-3">
                <label>Giới tính</label>
                <select name="gioi_tinh" class="form-control">
                    <option value="0">Nữ</option>
                    <option value="1">Nam</option>
                </select>
            </div>
            <div class="mt-3">
                <!--
                    button submit sẽ kích hoạt sự kiện submit của form
                    Khi form được kích hoạt sự kiện submit, nó sẽ gửi dữ liệu trong các ô input lên đường dẫn action
                    với phương thức HTTP(POST|GET) được khai báo trong method
                -->
                <button type="submit" class="btn btn-primary">Create</button>

                <!-- Khi click -> ko thêm mới nữa, quay về trang danh sách -->
                <a href="/we16305/src/admin/users/index.php" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>
