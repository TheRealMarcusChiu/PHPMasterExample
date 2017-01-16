<?php
// No namespace is defined for calling_namespace_code.php so the code exists in the global space.
// Any direct reference to MYCONST, MyFunction() or MyClass will fail because they exist in the App\Lib1 namespace.
// We must therefore add a prefix of \App\Lib1 to create a fully-qualified name.
require_once('lib1.php');

echo App\Lib1\MYCONST . "<div/>";
echo App\Lib1\MyFunction() . "<div/>";
echo \App\Lib1\MyClass::WhoAmI() . "<div/>";