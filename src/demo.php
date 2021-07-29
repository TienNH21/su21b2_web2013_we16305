<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "we16305";

/*
 * $connection (kết quả trả về của mysqli), là đối tượng đại diện cho kết nối tới DB
 * PHP sẽ làm việc với DB thông qua $connection.
 */
// B1: Tạo kết nối tới DB
$connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// B2: Viết câu truy vấn
$sql = "SELECT * FROM khach_hang";

// B3: Thực thi truy vấn
$queryResult = $connection->query($sql);

// B4: Bóc dữ liệu từ kết quả trả về
$result = []; // Khai báo mảng rỗng
while ( true ) {
    $row = $queryResult->fetch_row();
    if ($row === null) {
        break;
    }

    // Bóc dữ liệu
    $data = [
        'id' => $row[0],
        'ma' => $row[1],
        'ten' => $row[2],
        'sdt' => $row[3],
        'dia_chi' => $row[4],
        'gioi_tinh' => $row[5],
        'email' => $row[6],
    ];

    array_push($result, $data);
}

// B5: Đóng kết nối
$connection->close();

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
            </tr>
        </thead>

        <tbody>
            <?php for ($i = 0; $i < count( $result ); $i++) { ?>
                <tr>
                    <td>
                        <?php echo $result[$i]['id'] ?>
                    </td>
                    <td>
                        <?php echo $result[$i]['ma'] ?>
                    </td>
                    <td>
                        <?php echo $result[$i]['ten'] ?>
                    </td>
                    <td>
                        <?php echo $result[$i]['gioi_tinh'] ?>
                    </td>
                    <td>
                        <?php echo $result[$i]['sdt'] ?>
                    </td>
                    <td>
                        <?php echo $result[$i]['email'] ?>
                    </td>
                    <td>
                        <?php echo $result[$i]['dia_chi'] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
