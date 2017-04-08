<?php

class ReturningValuesTest extends PHPUnit_Framework_TestCase {

	function testPHUnitCandDecideByParameter() {
		$someObject = new SomeClass();

		// With PHPUnit
		$phpunitMock = $this::createMock('AClassToBeMocked');
		$phpunitMock->expects($this->any())->method('getNumber')->with(2)->will($this->returnValue(2));
		$phpunitMock->expects($this->any())->method('getNumber')->with(3)->will($this->returnValue(3));

		$this->assertEquals(4, $someObject->doubleNumber($phpunitMock, 2));
		$this->assertEquals(6, $someObject->doubleNumber($phpunitMock, 3));
	}
}

class AClassToBeMocked {
	function getNumber($number) {
		return $number;
	}
}

class SomeClass {
	function doubleNumber($anotherObject, $number) {
		return $anotherObject->getNumber($number) * 2;
	}
}