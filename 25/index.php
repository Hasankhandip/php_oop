<?php

$arr    = ['HTML', 'CSS', 'PHP', 'JS'];
$coding = new ArrayObject($arr);

$iterator = $coding->getIterator();
$coding->append('PYTHON');
while ($iterator->valid()) {
    echo $iterator->current() . "<br>";
    $iterator->next();
}