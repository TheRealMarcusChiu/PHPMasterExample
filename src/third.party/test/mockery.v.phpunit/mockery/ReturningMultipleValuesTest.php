<?php

class ReturningMultipleValuesTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testMultipleReturnValuesWithMockery() {
		$someObject = new SomeClass();
		$firstValue = 'first value';
		$secondValue = 'second value';

		// With Mockery - for unspecified indexes Mockery always returns the last specified value.
		$mockeryMock = \Mockery::mock('AnInexistentClass');
		$mockeryMock->shouldReceive('someMethod')->andReturn($firstValue, $secondValue, $firstValue, $secondValue);

		// Expect the returned value
		$this->assertEquals('first value second value', $someObject->concatenate($mockeryMock));
		$this->assertEquals('first value second value', $someObject->concatenate($mockeryMock));
	}

}

class AClassToBeMocked {
	function someMethod() {}
}

class SomeClass {
	function concatenate($anotherObject) {
		return $anotherObject->someMethod() . ' ' . $anotherObject->someMethod();
	}
}