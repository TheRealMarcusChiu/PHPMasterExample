<?php

class ReturningValuesTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testSimpleReturnValue() {
		$value = 3;
		$multiplier = 2;
		$expectedResult = 6;

		// Mockery
		$mockeryMock = \Mockery::mock(new Calculator());
		$mockeryMock->shouldReceive('add')->andReturn($expectedResult);

		$actualResult = $mockeryMock->multiply($value, $multiplier);

		$this->assertEquals($expectedResult, $actualResult);
	}

}

class Calculator {
	function add($firstNo, $secondNo) {
		return $firstNo + $secondNo;
	}

	function multiply($value, $multiplier) {
		$newValue = 0;

		for($i=0; $i<$multiplier; $i++) {
			$newValue = $this->add($newValue, $value);
		}

		return $newValue;
	}
}