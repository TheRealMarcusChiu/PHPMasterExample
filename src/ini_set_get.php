<?php
// dynamically changes the php configurations from the php.ini file

$ini_option = ini_get('date.timezone');
echo "$ini_option<div/>";

ini_set('date.timezone', 'America/Los_Angeles');

$ini_option = ini_get('date.timezone');
echo "$ini_option<div/>";