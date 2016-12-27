<?php

// <= PHP 5
$file = file_get_contents('../../webdictionary.txt', true);
echo $file;

echo "<br/>";

// > PHP 5
$file = file_get_contents('../../webdictionary.txt', FILE_USE_INCLUDE_PATH);
echo $file;
?>