<?php

class ReturningValuesTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testSimpleReturnValue() {
		$someObject = new SomeClass();
		$expectedValue = 'some value';

		// With PHPUnit
        $phpunitMock = $this::createMock('AClassToBeMocked');
        $phpunitMock->expects($this->once())->method('someMethod')->will($this->returnValue($expectedValue));

		$actualValue = $someObject->doSomething($phpunitMock);

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