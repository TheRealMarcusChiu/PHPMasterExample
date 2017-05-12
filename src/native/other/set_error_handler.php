<?php
function myErrorHandler($errno, $errstr, $errfile, $errline) {
	if ( $errno === E_RECOVERABLE_ERROR ) {
		echo "'catched' catchable fatal error\n";
		echo "\\nnerrno: " . $errno;
		echo "\n\nerrstr: " . $errstr;
		echo "\n\nerrfile: " . $errfile;
		echo "\n\nerrline: " . $errline;
		throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
		// return true;
	}
	return false;
}
set_error_handler('myErrorHandler');

class ClassA {
	public function method_a (ClassB $b) {}
}

class ClassWrong{}

try{
	$a = new ClassA;
	$a->method_a(new ClassWrong);
}
catch(Exception $ex) {
	echo "catched\n";
}
echo 'done.';