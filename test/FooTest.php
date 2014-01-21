<?php
use Project\Foo as Foo;
class FooTest extends \PHPUnit_Framework_TestCase
{
	public function testZero()
	{
		$my = new Foo();
		$this->assertEquals(7, $my->Math(9, 3));
	}
}