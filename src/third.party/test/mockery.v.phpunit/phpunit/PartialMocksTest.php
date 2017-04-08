<?php

class ReturningValuesTest extends PHPUnit_Framework_TestCase {
	function testSimpleReturnValue() {
		$value = 3;
		$multiplier = 2;
		$result = 6;

		// PHPUnit
		$phpMock = $this->getMockBuilder(Calculator::class)
			->setMethods(array('add'))
			->getMock();
		$phpMock->expects($this->exactly(2))->method('add')->will($this->returnValue($result));

		$this->assertEquals($result, $phpMock->multiply($value,$multiplier));
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