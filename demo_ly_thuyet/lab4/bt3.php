<?php

require_once './../libs/utils.php';

$arr = [
    "abcd",
    "abc",
    "de",
    "hjjj",
    "g",
    "wer",
];

$mangTam = array_map('strlen', $arr);

dd($mangTam);
