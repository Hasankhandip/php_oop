<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

class phpChild extends Php {
    public static function getClass() {
        return __CLASS__;
    }
}

$php = new Php;
$php->framework();

$childphp = new phpChild;
$childphp->framework();