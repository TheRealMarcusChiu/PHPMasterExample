<?php
$queue = array("orange", "banana");

$one = array("turkey", "christ");
array_unshift($queue, "apple", "raspberry", $one);
print_r($queue);