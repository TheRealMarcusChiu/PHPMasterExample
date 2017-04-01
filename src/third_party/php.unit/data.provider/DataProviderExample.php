<?php

/**
 * Created by PhpStorm.
 * User: marcus.chiu
 * Date: 2017-03-28
 * Time: 8:33 AM
 */
use PHPUnit\Framework\TestCase;


class DataProviderExample extends TestCase
{
	/**
	 * @dataProvider providerExample
	 */
	public function testSluggifyReturnsSluggifiedString($originalString, $expectedResult)
	{
		$this->assertEquals($expectedResult, $originalString);
	}

	public function providerExample()
	{
		return array(
			array('Hello, World!', 'Hello, World!'),
			array('', ''),
			['jesus', 'jesus']
		);
	}
}