<?php

class Person {
    public $Name        = "Dip Khan";
    public $Age         = "20";
    public $Skill       = "Php";
    private $Email      = "dipkhan@gmail.com";
    protected $Password = "12345678";

    function iteratorInner() {
        echo "inside class <br/>";
        foreach ($this as $key => $value) {
            echo "<pre>";
            echo "$key => $value";
            echo "</pre>";
        }
    }

}