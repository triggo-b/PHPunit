<?php
use Weather\Client as Client;


class ClientTest extends \PHPUnit_Framework_TestCase
{
//    public function testStub()
//    {
//        $mock = $this->getMock('Client');
//
//        $mock->expects($this->once())
//             ->method('getWeatherByCity')
//             ->will($this->returnValue('{"data": [4,5,6]}'));
//
//        $this->assertInstanceOf('Weather\Client', $mock);
//    }


    public function testSt()
    {
        $x = new Client();
        $mock = $this->getMock('Buzz');
        $mock->expects($this->once())
             ->method('getWeatherByCity')
             ->will($this->returnValue('{"data": [4,5,6]}'))
             ->with(1, $this->isInstanceOf('Weather\Response'));
        $x->getWeatherByCity($mock);

//        $this->assertInstanceOf('Weather\Client', $mock);
    }

}