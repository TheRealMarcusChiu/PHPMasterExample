<?php

// parameter must be an array
function one (array $array) {
    var_dump($array);
}

$argument = array("one", "two", "three");
one($argument);
echo "<div/>";
one($argument);

?>