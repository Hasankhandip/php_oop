<?php

/*
spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});
*/

include "classes/java.php";
include "classes/php.php";
include "classes/ruby.php";

use delowar\live\Ruby as ru;
new delowar\Java();
new delowar\Php();
new ru();
echo HTML;
echo delowar\CSS;
delowar\coding();