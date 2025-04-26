<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

// $cal = new Calculation;

// $nums = [
//     ['Number One', 10, 10],
//     ['Number Two', 20, 20],
// ];

// $cal->getValue($nums);

$php = new Php;

new Java($php);