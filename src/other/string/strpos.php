<?php
// strpos() returns the index of a first occurrence of substring within a string

$needle = "w";
$haystack = "hello world!";
$index = strpos($haystack, $needle);
echo "index: " . $index;

echo "<div/>";

$needle = "-";
$index = strpos($haystack, $needle);
echo "index: " . $index;

?>