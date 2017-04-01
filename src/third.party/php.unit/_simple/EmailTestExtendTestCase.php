<?php
/**
 * Created by PhpStorm.
 * User: marcus.chiu
 * Date: 2017-03-27
 * Time: 4:43 PM
 */

require_once 'Email.php';

use PHPUnit\Framework\TestCase;
use network\Email;

final class EmailTestExtendTestCase extends TestCase
{
	public function testCanBeCreatedFromValidEmailAddress()
	{
		$this->assertInstanceOf(
			Email::class,
			Email::fromString('user@example.com')
		);
	}

	public function testCannotBeCreatedFromInvalidEmailAddress()
	{
		$this->expectException(InvalidArgumentException::class);

		Email::fromString('invalid');
	}

	public function testCanBeUsedAsString()
	{
		$this->assertEquals(
			'user@example.com',
			Email::fromString('user@example.com')
		);
	}
}