<?php

class ExpectMultipleCallsTest extends PHPUnit_Framework_TestCase
{
	protected function tearDown() {
		\Mockery::close();
	}

	function testExpectMultiple() {
		$someObject = new SomeClass();

		// With PHPUnit 2 times
		$phpunitMock = $this::createMock('AClassToBeMocked');
		$phpunitMock->expects($this->exactly(2))->method('someMethod');

		// Exercise for PHPUnit
		$someObject->doSomething($phpunitMock);
		$someObject->doSomething($phpunitMock);
	}
}

class AClassToBeMocked {
	function someMethod(){}
}

class SomeClass {
	function doSomething($anotherObject) {
		$anotherObject->someMethod();
	}
}