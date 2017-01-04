<?php

// implode() joins an array of elements with a string

$test = array("one", "two", "three", "hello", "turkey");
$testTwo = implode("four", $test);
echo "<div/>after implode: $testTwo";

echo "<div/>";
var_dump($test);
echo "<div/>";
var_dump($testTwo);
echo "<div/><div/>";