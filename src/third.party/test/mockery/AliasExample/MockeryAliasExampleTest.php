<?php

// comment this out if you don't want to mock Utils::staticFunction()
// require 'Utils.php';

class AliasExampleTest extends PHPUnit_Framework_TestCase
{
	/**
	 * https://longka.info/blog/2017/07/05/mockery-exception-could-not-load-mock-class-already-exists/
	 * You may or may not need this
	 * @runInSeparateProcess
	 * @preserveGlobalState disabled
	 */
	public function testBar() {
		$out = new Foo();

		$utils = Mockery::mock('alias:Utils');
		$utils->shouldReceive('staticFunction')
		->andReturn('not original');

		$actualValue = $out->bar();

		$this->assertEquals('not original', $actualValue);
	}
}

class Foo
{
	public function bar() {
		$temp = Utils::staticFunction();
		return $temp;
	}
}

// Having the class here instead of a separate class file would fail

//class Utils
//{
//	static function staticFunction()
//	{
//		return "original";
//	}
//}