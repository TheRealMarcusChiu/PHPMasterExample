<?php
use App\Lib1;

require_once('lib1.php');

header('Content-type: text/plain');
echo Lib1\MYCONST . "\n";
echo Lib1\MyFunction() . "\n";
echo Lib1\MyClass::WhoAmI() . "\n";