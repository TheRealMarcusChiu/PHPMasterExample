<?php

/**
 * Class JustToCheckMockeryTest
 * Here's the code I've used to ensure that Mockery works with my project
 */
class _JustToCheckMockeryTest extends PHPUnit_Framework_TestCase {

	protected function tearDown() {
		\Mockery::close();
	}

	function testMockeryWorks() {
		$mock = \Mockery::mock('AnInExistentClass');
		$mock->shouldReceive('someMethod')->once();

		$workerObject = new AClassToWorkWith;
		$workerObject->doSomethingWit($mock);
	}
}

class AClassToWorkWith {

	function doSomethingWit($anotherClass) {
		return $anotherClass->someMethod();
	}

}