<?php

$name = "TienNH21";

function sayHello() {
    // use
    GLOBAL $name;

    echo "Hello " . $name;
};

sayHello();
