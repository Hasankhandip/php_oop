<?php

//interface

interface school {
    public function mySchool();
}

interface college {
    public function myCollege();
}

interface versity {
    public function myVersity();
}

class Teacher implements school, college, versity {
    public function __construct() {
        $this->mySchool();
        $this->myCollege();
        $this->myVersity();
    }
    public function mySchool() {
        echo "<h1>I am a school teacher</h1>";
    }
    public function myCollege() {
        echo "<h1>I am a college teacher</h1>";
    }
    public function myVersity() {
        echo "<h1>I am a versity teacher</h1>";
    }
}

class Student implements school, college, versity {
    public function __construct() {
        $this->mySchool();
        $this->myCollege();
        $this->myVersity();
    }
    public function mySchool() {
        echo "<h1>I am a school student</h1>";
    }
    public function myCollege() {
        echo "<h1>I am a college student</h1>";
    }
    public function myVersity() {
        echo "<h1>I am a versity student</h1>";
    }
}

$teacher = new Teacher();
$student = new Student();