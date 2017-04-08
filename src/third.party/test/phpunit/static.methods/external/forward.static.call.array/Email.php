<?php

require "EmailHelper.php";

class Email
{
	protected $emailHelperClass = EmailHelper::class;

	public function send() {
		// here is the external static method to be mocked, but we have to refactor it
		//$isActive = EmailHelper::isActive('string parameter');

		// this is the refactored external static method
		$isActive = forward_static_call_array(
			array($this->emailHelperClass, 'isActive'),
			array('string parameter'));

		if($isActive) {
			// send logic here
			return true;
		} else {
			return false;
		}
	}
}