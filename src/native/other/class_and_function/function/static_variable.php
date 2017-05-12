<?php
// normally, when function is completed/executed, all of its variables are deleted
// however, if you don't want the local variable to be deleted, use the 'static' keyword
function myTest() {
    static $x = 0;
    echo $x . "\n";
    $x++;
}

myTest();
myTest();
myTest();
?>