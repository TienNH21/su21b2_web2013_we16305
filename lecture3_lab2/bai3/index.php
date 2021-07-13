<?php
// var_dump($_POST); die;

$soBatDau = $_POST['so_bat_dau'];
$soKetThuc = $_POST['so_ket_thuc'];

$listSoChan = [];
$dem = 0;
$tong = 0;

for ($i = $soBatDau; $i <= $soKetThuc; $i++) {
    if ($i % 2 == 0) {
        $listSoChan[$dem] = $i;
        $dem++;

        $tong = $tong + $i;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        Kết quả: <?php echo $tong; ?>
    </h2>

    <ul>
        <?php for ($i = 0; $i < count($listSoChan); $i++) {
            echo "<li>" . $listSoChan[$i] . "</li>";
        } ?>
    </ul>

    <a href="/we16305/lesson3_lab2/bai3/index.html">Quay lại</a>
</body>
</html>
