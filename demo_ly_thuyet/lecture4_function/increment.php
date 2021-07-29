<?php

include './utils.php';

/*
 * Tìm hiểu các keyword sau, nêu ra sự khác biệt:
 * require/include/require_once/inlcude_once
 *
 * https://freetuts.net/lenh-require-require_once-include-include_once-trong-php-647.html
 * https://viettuts.vn/php/include_once-va-require_once-trong-php
 */

sayHello();

function increment(&$a, &$b) {
    $a++;
    $b++;

    echo "\$a = " . $a . "<br>";
    echo "\$b = " . $b . "<br>";
    echo "<hr>";
}

$x = 3; $y = 8;
increment($x, $y);

echo "\$x = " . $x . "<br>";
echo "\$y = " . $y . "<br>";
