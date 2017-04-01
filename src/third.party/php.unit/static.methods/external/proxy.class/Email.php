<?php

require "EmailHelperProxy.php";

class Email
{
	/**
	 * @var EmailHelperProxy
	 */
	protected $emailHelperProxy;

	public function __construct(EmailHelperProxy $emailHelperProxy) {
		$this->emailHelperProxy = $emailHelperProxy;
	}

	public function send() {
		// here is the external static method to be mocked
		$isActive = $this->emailHelperProxy->isActive('string parameter');

		if($isActive) {
			// send logic here
			return true;
		} else {
			return false;
		}
	}
}