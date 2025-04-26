<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

// object copy start
$java = new Language;
$java->setCat('OOP');
$java->setFramework('Spring');

$php = $java;
$php->setFramework("CodeIgniter");

echo $java->getCat() . "<br>";
echo $java->getFramework() . "<br>";

echo $php->getCat() . "<br>";
echo $php->getFramework() . "<br>";

// object copy end

echo "<hr>";

// object clone start
$java = new Language;
$java->setCat('OOP');
$java->setFramework('Spring');

$php = clone $java;
$php->setFramework("CodeIgniter");

echo $java->getCat() . "<br>";
echo $java->getFramework() . "<br>";

echo $php->getCat() . "<br>";
echo $php->getFramework() . "<br>";

// object clone end