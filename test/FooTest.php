<?php
use Project\Foo as Foo;

class FooTest extends \PHPUnit_Framework_TestCase
{
	public function testSeven()
	{
		$my = new Foo();
		$this->assertEquals(7, $my->Math(21, 3));
	}
    /**
     * @dataProvider providerDivision
     */
    public function testDivision($a, $b)
    {
        $this->setExpectedException('Project\Exception\Alarm');
        $my = new Foo();
        $my->Math($a, $b);
    }
    public function providerDivision ()
    {
        return array (
            array (2, false),
            array (2, null),
            array (3, 0),
            array (2, -1),
            array (2, 3.5),
            array (3, 4),
            array ('a', -1),
            array (2, 3.5),
            array (3, 4),
        );
    }
}