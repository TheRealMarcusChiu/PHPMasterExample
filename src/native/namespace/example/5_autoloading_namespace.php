<?php
header("Content-Type: text/plain");
$obj1 = new MarcusChiu(); // folder/MarcusChiu.php is auto-loaded

$obj1->sayHi();

// autoload function
function __autoload($class_name) {
	echo 'autoloading' . "\n";
	require_once("folder/$class_name.php");
}
?>