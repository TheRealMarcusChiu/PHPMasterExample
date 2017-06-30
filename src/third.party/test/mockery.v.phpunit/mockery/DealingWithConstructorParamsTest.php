<?php

class DealingWithConstructorParamsTest extends \PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	//////////////////////////////////////////
	// With No parent::__constructor() call //
	//////////////////////////////////////////

	function testConstructorParams() {
		$expectedName = "Marcus Chiu";

		// Do not call constructor
		$noConstructorCall = \Mockery::mock(User::class);
		$noConstructorCall->shouldReceive('getName')->andReturn($expectedName);
	}

	function testConstructorParams2() {
		$firstName = "Marcus";
		$lastName = "Chiu";
		$expectedName = "Marcus Chiu";

		// Use constructor parameters
		$withConstructParams = \Mockery::mock('User[protectedGetName]', [$firstName, $lastName])
			->shouldAllowMockingProtectedMethods();
		$withConstructParams->shouldReceive('protectedGetName')->andReturn($expectedName);

		$actualName = $withConstructParams->protectedGetName();

		$this->assertEquals($expectedName, $actualName);
	}

	function testContructorParams3() {
		$firstName = "Marcus";
		$lastName = "Chiu";
		$expectedName = "Marcus Chiu";

		// User real object with real values and mock over it
		$realUser = new User($firstName, $lastName);
		$mockRealObj = \Mockery::mock($realUser);
		$mockRealObj->shouldReceive('getName')->andReturn($expectedName);

		// TODO the mocked object does not actually carry over the instance fields
	}

	///////////////////////////////////////
	// With parent::__constructor() call //
	///////////////////////////////////////

	function testParentConstructorParams2() {
		$firstName = "Marcus";
		$lastName = "Chiu";
		$expectedName = "Marcus Chiu";

		// Use constructor parameters
		$withConstructParams = \Mockery::mock(Admin::class, [$firstName, $lastName])
			->shouldAllowMockingProtectedMethods();
		$withConstructParams->shouldReceive('protectedGetName')->andReturn($expectedName);

		$actualName = $withConstructParams->protectedGetName();

		$this->assertEquals($expectedName, $actualName);
	}

	function testParentConstructor3() {
		$firstName = "Marcus";
		$lastName = "Chiu";
		$expectedName = "Marcus Chiu";

		// User real object with real values and mock over it
		$realUser = new Admin($firstName, $lastName);
		$mockRealObj = \Mockery::mock($realUser);
	}
}

class User {
	public $firstName;
	protected $lastName;

	function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->getName();
	}

	public function getName() {
		return $this->firstName . ' ' . $this->lastName;
	}

	protected function protectedGetName() {
		return $this->firstName . ' ' . $this->lastName;
	}
}

class Admin extends User {
	function __construct($firstName, $lastName) {
		parent::__construct($firstName, $lastName);
	}
}