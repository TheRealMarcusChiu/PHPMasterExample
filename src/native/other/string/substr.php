<?php
// substr() returns part of a string

$postal = "12345-6789";
echo "postal string: " . $postal;
echo "<div/>";

$start_index = 0;
$end_index = 5;
$postal_comp = substr($postal, $start_index, $end_index);
echo "substr($postal, $start_index, $end_index): " . $postal_comp;
echo "<div/>";

$index = 4;
$substr = substr($postal, $index);
echo "substr($postal, $index): " . $substr;
echo "<div/>";

$index = -4;
$substr = substr($postal, $index);
echo "substr($postal, $index): " . $substr;
echo "<div/>";

?>