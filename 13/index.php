<?php

//Abstract Class

abstract class Student {

    public $name;
    public $age;

    public function details() {
        echo $this->name . " is " . $this->age . " years old <br>";
    }
    abstract public function school();
}

class Boy extends Student {
    public function describe() {
        return parent::details() . " And I a college student.<br>";
    }

    public function school() {
        return "I like playing cricket";
    }
}

$student       = new Boy;
$student->name = "Hasan";
$student->age  = "20";
echo $student->describe();
echo $student->school();