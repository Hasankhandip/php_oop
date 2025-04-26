<?php

abstract class Php {
    public function framework() {
        echo "Base Class Constant and Class Name-> " . __CLASS__ . "<br/>";
        echo "Base Class Function and Class Name-> " . get_class($this) . "<br/>";
    }
}