<?php

include "student.php";

if (class_exists("Student")) {
    $st = new Student;
    if (method_exists($st, 'describe')) {
        $st->describe();
    } else {
        echo "Method not found";
    }
} else {
    echo "Class not found";
}