<?php

// array_merge — Merge one or more arrays

$array_one = array(1,2,3);
$array_two = array(4,5,6);

$array_combined = array_merge($array_one, $array_two, $array_one);

var_dump($array_combined);