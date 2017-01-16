<?php
use marcus\chiu\MarcusChiu2 as MC;

$obj = new MC();
echo $obj->sayHi();

// autoload function
function __autoload($class) {
	echo '$class: ' . $class . "<div/>";

	// convert namespace to full file path
	$class = 'folder\\' . str_replace('\\', '/', $class) . '.php';
	require_once($class);
}
?>