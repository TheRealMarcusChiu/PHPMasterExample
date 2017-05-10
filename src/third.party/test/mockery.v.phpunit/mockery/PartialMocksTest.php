<?php

class ReturningValuesTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testSimpleReturnValue() {
		// Mockery
		$mockeryMock = \Mockery::mock(Greeter::class)
			->shouldAllowMockingProtectedMethods()
			->makePartial();

		$mockeryMock->shouldReceive('functionToBeMocked')->with("hello")->andReturn("Ha! Mocked IT!");
		$mockeryMock->name = "Jesus";

		$mockeryMock->greet();
	}

}

class Greeter {

	public $name = "Marcus";

	protected function functionToBeMocked($hello) {
		return "Hello, World! Again!\n";
	}

	function greet() {
		echo "Hello, I'm " . $this->name . "\n";
		echo $this->functionToBeMocked("hello");
	}
}