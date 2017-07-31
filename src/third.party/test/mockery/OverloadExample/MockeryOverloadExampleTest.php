<?php

// comment this out if you don't want to mock Example->someMethod()
// require 'Example.php';

class OverloadExampleTest extends PHPUnit_Framework_TestCase
{
	protected function tearDown() {
		\Mockery::close();
	}

	/**
	 * https://longka.info/blog/2017/07/05/mockery-exception-could-not-load-mock-class-already-exists/
	 * You may or may not need this
	 * @runInSeparateProcess
	 * @preserveGlobalState disabled
	 */
	public function testOverloadExample()
	{
		$mock = \Mockery::mock('overload:Example');
		$mock->shouldreceive('someMethod')->andReturn('not original');

		$classToTest = new User();
		$result = $classToTest->methodToTest();

		$this->assertEquals('not original', $result);
	}
}

class User
{
	public function methodToTest()
	{
		$myClass = new Example();
		$result = $myClass->someMethod();
		return $result;
	}
}

// Having the class here instead of a separate class file would fail
//class Example
//{
//	function someMethod()
//	{
//		return "original";
//	}
//}