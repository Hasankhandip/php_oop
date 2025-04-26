<?php

class Php {
    // public static function framework() {
    //     echo "Cakephp is a framework <br/>";
    // }
    // public function getFramework() {
    //     self::framework();
    // }

    public static function framework() {
        echo static::getClass() . "<br/>";
    }
    public static function getClass() {
        return __CLASS__;
    }
}