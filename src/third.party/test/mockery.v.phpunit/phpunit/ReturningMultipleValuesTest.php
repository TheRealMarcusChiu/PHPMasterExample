<?php

class ReturningMultipleValuesTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testDemonstratePHPUnitCallIndexingOnTheSameClass() {
		$someObject = new SomeClass();
		$firstValue = 'first value';
		$secondValue = 'second value';

		// With PHPUnit
		$phpunitMock = $this::createMock('AClassToBeMocked');
		$phpunitMock->expects($this->at(0))->method('someMethod')->will($this->returnValue($firstValue));
		$phpunitMock->expects($this->at(1))->method('someMethod')->will($this->returnValue($secondValue));
		$phpunitMock->expects($this->at(2))->method('someMethod')->will($this->returnValue($firstValue));
		$phpunitMock->expects($this->at(3))->method('someMethod')->will($this->returnValue($secondValue));

		// Expect the returned value
		$this->assertEquals('first value second value', $someObject->concatenate($phpunitMock));
		$this->assertEquals('first value second value', $someObject->concatenate($phpunitMock));

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