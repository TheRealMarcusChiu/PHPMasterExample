<?php

class DealingWithConstructorParamsTest extends \PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}


	//////////////////////////////////////////
	// With No parent::__constructor() call //
	//////////////////////////////////////////

	/**
	 * Do not call constructor
	 */
	function testConstructorParams() {
		$noConstructorCall = \Mockery::mock(User::class)
			->shouldAllowMockingProtectedMethods()->makePartial();

		$beforeMockActualName = $noConstructorCall->protectedGetName();
		$this->assertEquals(" ", $beforeMockActualName);

		$noConstructorCall->shouldReceive('protectedGetName')->andReturn("Erina Chiu");
		$afterMockActualName = $noConstructorCall->protectedGetName();
		$this->assertEquals("Erina Chiu", $afterMockActualName);
	}

	/**
	 * Use constructor parameters
	 */
	function testConstructorParams2() {
		// Mockery::mock(User::class, ["Marcus", "Chiu"]) works too
		$withConstructParams = \Mockery::mock('User[protectedGetName]', ["Marcus", "Chiu"])
			->shouldAllowMockingProtectedMethods()->makePartial();

		$beforeMockActualName = $withConstructParams->protectedGetName();
		$this->assertEquals("Marcus Chiu", $beforeMockActualName);

		$withConstructParams->shouldReceive('protectedGetName')->andReturn("Erina Chiu");
		$afterMockActualName = $withConstructParams->protectedGetName();
		$this->assertEquals("Erina Chiu", $afterMockActualName);
	}

	/**
	 * User real object with real values and mock over it
	 * TODO the mocked object does not actually carry over the instance fields
	 */
	function testContructorParams3() {
		$expectedName = "Marcus Chiu";

		$realUser = new User("Marcus", "Chiu");
		$mockRealObj = \Mockery::mock($realUser);
		$mockRealObj->shouldReceive('getName')->andReturn($expectedName);
	}


	///////////////////////////////////////
	// With parent::__constructor() call //
	///////////////////////////////////////

	/**
	 * Use constructor parameters
	 */
	function testParentConstructorParams1() {
		$withConstructParams = \Mockery::mock(Admin::class, ["Marcus", "Chiu"])
			->shouldAllowMockingProtectedMethods()->makePartial();

		$beforeMockActualName = $withConstructParams->protectedGetName();
		$this->assertEquals("Marcus Chiu", $beforeMockActualName);

		$withConstructParams->shouldReceive('protectedGetName')->andReturn("Erina Chiu");
		$afterMockActualName = $withConstructParams->protectedGetName();
		$this->assertEquals("Erina Chiu", $afterMockActualName);
	}

	/**
	 * Use constructor parameters
	 */
	function testParentConstructorParams2() {
		$withConstructParams = \Mockery::mock(Admin::class, ["Marcus", "Chiu"])
			->shouldAllowMockingProtectedMethods()->makePartial();

		$beforeMockActualName = $withConstructParams->protectedGetName();
		$this->assertEquals("Marcus Chiu", $beforeMockActualName);

		$withConstructParams->shouldReceive('protectedGetName')->andReturn("Erina Chiu");
		$afterMockActualName = $withConstructParams->protectedGetName();
		$this->assertEquals("Erina Chiu", $afterMockActualName);
	}

	/**
	 * User real object with real values and mock over it
	 * TODO the mocked object does not actually carry over the instance fields
	 */
	function testParentConstructorParams3() {
		$realUser = new Admin("Marcus", "Chiu");
		$mockRealObj = \Mockery::mock($realUser);
	}
}

class User {
	public $firstName;
	protected $lastName;

	function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;

		// test cases for mocking Admin::class
		// $temp = $this->getName();          // cannot call public functions
		$temp = $this->protectedGetName(); // can call protected functions
	}

	function getName() {
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