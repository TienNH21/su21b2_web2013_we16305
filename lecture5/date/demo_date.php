<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

/*
 * 20/07/2021 -> d/m/Y
 * Y-m-d
 * Y: năm
 * m: tháng
 * d: ngày
 * D: thứ trong tuần
 * M: tên tháng
 * y: định dạng năm với 2 số cuối
 * Y: định dạng năm với 4 số
 */
$dateFormat = 'D, M, d-m-Y';

/*
 * H(Hour): giờ
 * i: phút
 * s(second): giây
 */
$timeFormat = 'H:i:s';
$format = "$dateFormat $timeFormat";
echo date($format);

echo "<hr>";

$cong1h = strtotime("+1 hour");
echo date($format, $cong1h);

echo "<br>";
echo date( $format, strtotime('2021-08-04') );
echo "<br>";
echo date( $format, strtotime('2021-08-04 last Monday') );
echo "<br>";

$endDate = date( $format, strtotime('28-06-2021 +7 week last Saturday') );
echo $endDate;
