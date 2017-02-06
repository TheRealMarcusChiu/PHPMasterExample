<?php

function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2<div/>";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2<div/>";
    }
}


// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two"));

// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));
