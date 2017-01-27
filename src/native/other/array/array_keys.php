<?php
// Return all the keys or a subset of the keys of an array

$array = array("hello", "world");
var_dump(array_keys($array));

$array = array(
    "hello" => "jesus",
    "world" => "christ"
);
var_dump(array_keys($array));

