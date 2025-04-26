<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

$obj = new Observerable();
$sk  = new Skype();
$gt  = new Gtalk();

$obj->register($sk);
$obj->register($gt);
$obj->stateChange();