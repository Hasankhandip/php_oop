<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

trait Java {
    public function javaCoder() {
        return "I Love Java <br/>";
    }
}
trait Php {
    public function phpCoder() {
        return "I Love Php <br/>";
    }
}

class CoderOne {
    use Java, Php;
}

$c1 = new CoderOne;
echo $c1->javaCoder();
echo $c1->phpCoder();