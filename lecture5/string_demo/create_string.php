<?php

/*
 * Chuỗi tạo bởi dấu "  hoặc HEREDOC cho phép nhúng các biến của PHP vào trong chuỗi
 * Chuỗi tạo bởi dấu '  hoặc NOWDOC không hỗ trợ việc này
 */

$hoTen = 'TienNH21';
$lop = "WE16305";
$xinChao = "Hello $hoTen";
$xinChao2 = 'Hello $hoTen';

echo $xinChao;
echo '<br>';
echo $xinChao2;

echo '<hr>';

/*
 * Heredoc
 * Nowdoc
 */

$heredoc = <<<HERE
    \$hoTen = $hoTen
HERE;

// $hoTen = TienNH21

echo $heredoc;
echo '<br>';

$nowdoc = <<<'NOW'
    Hello $hoTen
    FPT Polytechnic
NOW;

echo $nowdoc;
