<?php

require_once 'Email.php';

/**
 * Class EmailTest
 * Example for stubbing and mocking internal static methods
 * staticExpects is deprecated in phpunit 3.8 and removed in 3.9
 */
class EmailTest extends \PHPUnit_Framework_TestCase
{
	public function testBar()
	{
		$mockEmail = $this->getMockClass(Email::class, array('isActive'));

		// staticExpects only exists for "phpunit/phpunit": "~3.7"
		$mockEmail::staticExpects($this->any())
			->method('isActive')
			->will($this->returnValue(false));

		$this->assertEquals(false, $mockEmail::send("marcus.chiu@kibocommerce.com", "Hello, World!"));
	}
}