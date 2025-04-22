<?php

class Person {
    public $name;
    public $age;

    public function personName() {
        echo "Person Name is: " . $this->name . "<br/>";
    }
    public function personAge($value) {
        echo "Person Age is: " . $this->age = $value . "<br/>";

    }
}

$personOne       = new Person;
$personOne->name = "Dip Khan";
$personOne->personName();
$personOne->personAge("21");