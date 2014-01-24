<?php
use Weather\Client as Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    protected $fixture;

    public function testInstanse()
    {
        $mock = $this->getMock("Buzz\\Browser");
        $mock->expects($this->any())
             ->method("get")
             ->will($this->returnValue('{"data": {1, 2}}'));

        $dp = new Client($mock);
        $this->assertInstanceOf('Weather\Response', $dp->getWeatherByCity());
    }

//    $this->setExpectedException('Buzz\Exception\ClientException');

    protected function setUp()
    {
        $data = '{
            "coord": {
                "lon":39.17,
                "lat":51.67
            },
            "sys":{
                "message":0.103,
                "country":"RU",
                "sunrise":1390454036,
                "sunset":1390485393
            },
            "weather":[{
                "id":804,
                "main":"Clouds",
                "description":"overcast clouds",
                "icon":"04d"
            }],
            "base":"gdps stations",
            "main":{
                "temp":262.467,
                "temp_min":262.467,
                "temp_max":262.467,
                "pressure":1006.41,
                "sea_level":1024.79,
                "grnd_level":1006.41,
                "humidity":89},
                "wind":{
                    "speed":5.83,
                    "deg":49.5
                },
                "snow":{"3h":0},
                "clouds":{"all":92},
                "dt":1390469285,
                "id":472045,
                "name":"Voronezh",
                "cod":200
            }';

        $this->fixture = new \Weather\Response($data);
    }



    public function testPressure()
    {
        $this->assertEquals(1006.41, $this->fixture->getPressure());
    }

    public function testTemperature()
    {
        $this->assertEquals(round(262.467- 273.15, 2), $this->fixture->getTemperature());
    }

    public function testWindSpeed()
    {
        $this->assertEquals(5.83, $this->fixture->getWindSpeed());
    }

    public function testCity()
    {
        $this->assertEquals('Voronezh', $this->fixture->getCity());
    }

    protected function tearDown()
    {
        $this->fixture = NULL;
    }
}