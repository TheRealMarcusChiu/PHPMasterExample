<?php

require_once 'Email.php';

/**
 * Class EmailTest
 * Example for stubbing and mocking external static methods
 */
class EmailTest extends \PHPUnit_Framework_TestCase
{
	public function testBar()
	{
		// Create a stub for the SomeClass class.
		$stub = $this->createMock(EmailHelperProxy::class);

		// Configure the stub.
		$stub->method('isActive')
			->willReturn(false);

		$email = new Email($stub);

		$this->assertEquals(false, $email->send());
	}
}