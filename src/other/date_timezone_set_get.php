<?php
// to change the date.timezone go to the php.ini file and find 'date.timezone'
$ini_timezone = ini_get('date.timezone');
$script_tz = date_default_timezone_get();

echo "ini timezone before set: $ini_timezone<div/>";
echo "script timezone before set: $script_tz<div/>";

date_default_timezone_set('America/Los_Angeles');
$ini_timezone = ini_get('date.timezone');
$script_tz = date_default_timezone_get();
echo "ini timezone after set: $ini_timezone<div/>";
echo "script timezone after set:  $script_tz<div/>";


if (strcmp($script_tz, ini_get('date.timezone'))){
    echo "Script timezone differs from ini-set timezone.";
} else {
    echo "Script timezone and ini-set timezone match.";
}
