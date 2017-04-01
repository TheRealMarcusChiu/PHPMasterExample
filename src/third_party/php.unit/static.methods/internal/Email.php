<?php

class Email
{
	public static function send($recipient, $message)
	{
		// here is the internal static method
		$isActive = static::isActive();

		if($isActive) {
			// send logic here
			return true;
		} else {
			return false;
		}
	}

	public static function isActive()
	{
		return true;
	}
}