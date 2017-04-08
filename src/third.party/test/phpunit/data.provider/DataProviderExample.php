<?php

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
			['jesus', 'jesus'],
			[[1,2], [1,2]]
		);
	}
}