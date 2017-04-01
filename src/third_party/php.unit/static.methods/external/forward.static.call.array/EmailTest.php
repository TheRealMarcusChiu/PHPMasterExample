<?php

require_once 'Email.php';

/**
 * Class EmailTest
 * Example for stubbing and mocking external static methods
 * staticExpects is deprecated in phpunit 3.8 and removed in 3.9
 */
class EmailTest extends \PHPUnit_Framework_TestCase
{
	public function testBar()
	{
		// create a mock class with expectations
		$mockEmailHelper = $this->getMockClass(EmailHelper::class, array('isActive'));
		$mockEmailHelper::staticExpects($this->once())
			->method('isActive')
			->will($this->returnValue(false));

		$email = new Email();

		// set the mock classname in the property
		$reflProp = new \ReflectionProperty(Email::class, 'emailHelperClass');
		$reflProp->setAccessible(true);
		$reflProp->setValue($email, $mockEmailHelper);

		$email->send();
	}
}