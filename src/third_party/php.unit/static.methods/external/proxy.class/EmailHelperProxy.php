<?php

require "EmailHelper.php";

class EmailHelperProxy
{
	public function isActive($string)
	{
		return EmailHelper::isActive($string);
	}
}