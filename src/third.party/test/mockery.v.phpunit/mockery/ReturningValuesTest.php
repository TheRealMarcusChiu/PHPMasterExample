<?php

class ReturningValuesTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testSimpleReturnValue() {
		$someObject = new SomeClass();
		$expectedValue = 'some value';

		$mockeryMock = \Mockery::mock('AnInexistentClass');
		$mockeryMock->shouldReceive('someMethod')->once()->andReturn($expectedValue);

		$actualValue = $someObject->doSomething($mockeryMock);

		$this->assertEquals($expectedValue, $actualValue);
	}

}

class AClassToBeMocked {
	function someMethod() {}
}

class SomeClass {
	function doSomething($anotherObject) {
		return $anotherObject->someMethod();
	}
}