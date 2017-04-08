<?php

class ExpectMultipleCallsTest extends PHPUnit_Framework_TestCase
{
	protected function tearDown() {
		\Mockery::close();
	}

	function testExpectMultiple() {
		$someObject = new SomeClass();

		// With Mockery 1 time
		$mockeryMock = \Mockery::mock('AnInExistentClass');
		$mockeryMock->shouldReceive('someMethod')->once();
		// Exercise for Mockery
		$someObject->doSomething($mockeryMock);

		// With Mockery 2 times
		$mockeryMock = \Mockery::mock('AnInExistentClass');
		$mockeryMock->shouldReceive('someMethod')->twice();
		// Exercise for Mockery
		$someObject->doSomething($mockeryMock);
		$someObject->doSomething($mockeryMock);

		// With Mockery 3 times
		$mockeryMock = \Mockery::mock('AnInExistentClass');
		$mockeryMock->shouldReceive('someMethod')->times(3);
		// Exercise for Mockery
		$someObject->doSomething($mockeryMock);
		$someObject->doSomething($mockeryMock);
		$someObject->doSomething($mockeryMock);
	}
}

class SomeClass {
	function doSomething($anotherObject) {
		$anotherObject->someMethod();
	}
}