<?php

function printl($var)
{
	echo "inside printl<div/>";
	echo $var;
}

$a = "hello marcus";
call_user_func('printl', $a);
