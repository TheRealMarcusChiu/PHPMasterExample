<?php
// substr() returns part of a string

$postal = "12345-1234";

$start_index = 0;
$end_index = 5;
$postal_comp = substr($postal, $start_index, $end_index);

echo $postal_comp;

?>