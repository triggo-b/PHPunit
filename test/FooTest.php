<?php
use Project\Foo as Foo;

class FooTest extends \PHPUnit_Framework_TestCase
{
	public function testSeven()
	{
		$my = new Foo();
		$this->assertEquals(7, $my->Math(21, 3));
	}
    public function testDivision()
    {
        $this->setExpectedException('Project\Exception\Alarm');
        $my = new Foo();
        $my->Math(4, 0);
    }
}