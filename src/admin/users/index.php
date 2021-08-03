<?php
/*
 * .    xét thư mục hiện tại
 * ..   lùi lại 1 thư mục
 */
require_once './../../db/khach_hang.php';
$kq = getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/we16305/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-success"
                    href="/we16305/src/admin/users/create.html">Create</a>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Mã KH</td>
                        <td>Tên KH</td>
                        <td>Giới tính</td>
                        <td>SDT</td>
                        <td>Email</td>
                        <td>Địa chỉ</td>
                        <td colspan="2">Thao tác</td>
                    </tr>
                </thead>

                <tbody>
                    <?php for ($i = 0; $i < count( $kq ); $i++) { ?>
                        <tr>
                            <td>
                                <?php echo $kq[$i]['id'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ma'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['ten'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['gioi_tinh'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['sdt'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['email'] ?>
                            </td>
                            <td>
                                <?php echo $kq[$i]['dia_chi'] ?>
                            </td>
                            <td>
                                <!--
                                    ?id=1
                                    query string -> truyền tham số lên url
                                -->
                                <a
                                    href="/we16305/src/admin/users/edit.php?id=<?php echo $kq[$i]['id'] ?>"
                                    class="btn btn-primary">Update</a>
                            </td>
                            <td>
                                <a
                                    href="/we16305/src/admin/users/delete.php?id=<?php echo $kq[$i]['id'] ?>"
                                    class="btn btn-danger"
                                >Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
