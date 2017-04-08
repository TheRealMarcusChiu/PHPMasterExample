<?php

class DealingWithConstructorParamsTest extends \PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testConstructorParams() {
		$firstName = "Marcus";
		$lastName = "Chiu";
		$expectedName = "Marcus Chiu";

		// Do not call constructor
		$noConstructorCall = \Mockery::mock(User::class);
		$noConstructorCall->shouldReceive('getName')->andReturn($expectedName);

		// Use constructor parameters
		$withConstructParams = \Mockery::mock('User[getName]', array($firstName, $lastName));
		$withConstructParams->shouldReceive('getName')->andReturn($expectedName);

		// User real object with real values and mock over it
		$realUser = new User($firstName, $lastName);
		$mockRealObj = \Mockery::mock($realUser);
		$mockRealObj->shouldReceive('getName')->andReturn($expectedName);
	}
}

class User {
	public $firstName;
	public $lastName;

	function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	function getName() {
		return $this->firstName . ' ' . $this->lastName;
	}
}