<?php

// set file to read
$file = "../../webdictionary.txt" or die('Could not open file!');

// open file
$fh = fopen($file, 'r') or die('Could not open file!');

// read file contents
$data = fread($fh, filesize($file)) or die('Could not read file!');

// close file
fclose($fh);

// print file contents
echo $data;

?>