<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

class phpChild extends Php {
    public function cms() {
        echo "Base Class Constant and Class Name-> " . __CLASS__ . "<br/>";
        echo "Base Class Function and Class Name-> " . get_class($this) . "<br/>";
    }
    public function ourMethod() {
        parent::framework();
    }
}

$php = new phpChild();
$php->framework();
echo "<hr/>";
$php->cms();
echo "<hr/>";
$php->ourMethod();