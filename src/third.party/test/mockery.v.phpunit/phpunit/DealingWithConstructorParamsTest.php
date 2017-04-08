<?php

class DealingWithConstructorParamsTest extends PHPUnit_Framework_TestCase {
	function testConstructorParams() {
		//Specify Constructor Parameters
		//$phpMock = $this->createMock('Calculator', array('add'), array(1,2)); // deprecated

		//Do not call original constructor
		//$phpMock = $this->createMock('Calculator', array('add'), array(), '', false); // deprecated

		$firstName = "Marcus";
		$lastName = "Chiu";
		$expectedName = "Marcus Chiu";

		$mock = $this->getMockBuilder(User::class)
			->setConstructorArgs(array($firstName, $lastName))
			->setMethods(null) // all methods will run actual code
			->getMock();

		$actualName = $mock->getName();

		$this->assertEquals($expectedName, $actualName);
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