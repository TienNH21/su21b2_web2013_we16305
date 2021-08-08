<?php

$soA = +$_GET['so_a'];
$soB = +$_GET['so_b'];

$ketQua = '';
if ($soA == 0) {
    $ketQua = "Phương trình vô nghiệm";
}else if ($soB == 0) {
    $ketQua = "Phương trình có vô số nghiệm";
} else {
    $ketQua = "Nghiệm : " . (- $soB / $soA);
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
        <?php echo $ketQua; ?>
    </h2>
    <a href="/we16305/lesson3_lab2/bai1/index.html">Quay lại</a>
</body>
</html>
