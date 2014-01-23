<?php
namespace Weather;
use Buzz\Browser as Buzz;
use Weather\Exception\falseException;

class Client
{
    const URL = 'http://api.openweathermap.org/data/2.5/weather?q=';
    protected $browser;

    public function __construct(Buzz $httpClient)
    {
        $this->browser = $httpClient;
    }

    public function getWeatherByCity ($city = false)
    {
        $response = $this->browser->get(self::URL . $city . ',ru');
        if(!$response) {
            throw new Exception\falseException('NOT JSON');
        }
        return new Response($response);
    }
}