<?php

class ReturningValuesTest extends PHPUnit_Framework_TestCase {

	function testPHUnitCandDecideByParameter() {
		$someObject = new SomeClass();

		// Mockery
		$mockeryMock = \Mockery::mock('AnInexistentClass');
		$mockeryMock->shouldReceive('getNumber')->with(2)->andReturn(2);
		$mockeryMock->shouldReceive('getNumber')->with(3)->andReturn(3);

		$this->assertEquals(4, $someObject->doubleNumber($mockeryMock, 2));
		$this->assertEquals(6, $someObject->doubleNumber($mockeryMock, 3));
	}
}

class SomeClass {
	function doubleNumber($anotherObject, $number) {
		return $anotherObject->getNumber($number) * 2;
	}
}