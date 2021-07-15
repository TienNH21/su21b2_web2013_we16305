<?php

function sayHello($name = "FPT Polytechnic") {
    echo "<h2>Hello " . $name . "<h2>";
}

/*
 * Lưu ý: Những tham số có giá trị mặc định phải nằm ở cuối danh sách tham số
 */
function add($a, $b = 9, $c = 0) {
    return $a + $b + $c;
}
