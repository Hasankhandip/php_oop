<?php
class person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age  = $age;
    }

    public function personDetails() {
        echo "Person name is {$this->name} and the person age is {$this->age}";
    }
}

$personOne = new Person('Dip Khan', '20');
$personOne->personDetails();
?>