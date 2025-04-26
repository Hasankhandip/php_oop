<?php

$arr = ['HTML', 'CSS', 'PHP', 'JS', 'PYTHON', 'GO'];
$ai  = new ArrayIterator($arr);
$ci  = new CachingIterator($ai);
foreach ($ci as $value) {
    echo $value;
    if ($ci->hasNext()) {
        echo ", ";
    }
}