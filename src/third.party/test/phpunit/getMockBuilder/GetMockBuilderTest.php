<?php

use PHPUnit\Framework\TestCase;

/**
 * Class GetMockBuilderTest
 * https://jtreminio.com/2013/03/unit-testing-tutorial-part-5-mock-methods-and-overriding-constructors/
 */
class GetMockBuilderTest extends TestCase
{
	function testGetMockBuilderDoNotCallSetMethods() {
		/*
		 * This produces a mock object where the methods:
		 * - Are all stubs
		 * - All return null by default
		 * - Are easily overridable
		 */
		$authorizeNet = $this->getMockBuilder('\AuthorizeNetAIM')
			->getMock();
	}

	function testGetMockBuilderPassingEmptyArray() {
		/*
		 * This produces a mock object that is exactly the same as if you have not called setMethods() at all. The methods
		 * - Are all stubs
		 * - All return null by default
		 * - Are easily overridable
		 */
		$authorizeNet = $this->getMockBuilder('\AuthorizeNetAIM')
			->setMethods(array())
			->getMock();
	}

	function testGetMockBuilderPassingNull() {
		/*
		 * This produces a mock object where the methods
		 * - Are all mocks
		 * - Run the actual code contained within the method when called
		 * - Do not allow you to override the return value
		 */
		$authorizeNet = $this->getMockBuilder('\AuthorizeNetAIM')
			->setMethods(null)
			->getMock();
	}

	function testGetMockBuilderPassingArrayOfMethodNames() {
		/*
		 * This produces a mock object whose methods are a mix of the above three scenarios.
		 *
		 * The methods you have identified
		 * - Are all stubs,
		 * - All return null by default
		 * - Are easily overridable
		 *
		 * Methods you did not identify
		 * - Are all mocks
		 * - Run the actual code contained within the method when called
		 * - Do not allow you to override the return value
		 */
		$authorizeNet = $this->getMockBuilder('\AuthorizeNetAIM')
			->setMethods(array('authorizeAndCapture', 'foobar'))
			->getMock();
	}
}