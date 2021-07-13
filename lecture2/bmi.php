<?php
$chieuCao = +$_GET['chieu_cao'];
$canNang = +$_GET['can_nang'];

$bmi = $canNang * 10000 / ( $chieuCao * $chieuCao );
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
    <form method="GET" action="/we16305/lesson2/bmi.php">
        <div>
            <label>Chiều cao</label>
            <input type="number" name="chieu_cao" />
        </div>
        <div>
            <label>Cân nặng</label>
            <input type="number" name="can_nang" />
        </div>
        <button>Tính</button>
    </form>

    <h2>Kết quả: <?php echo $bmi; ?> </h2>
</body>
</html>