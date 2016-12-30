<?php

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

// these are global variables
$x = 5;
$y = 10;

myTest();

echo $y; // outputs 15
?>