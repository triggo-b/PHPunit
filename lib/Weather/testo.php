<?php
namespace Weather;
use Buzz\Browser as Buzz;
require '../../vendor/autoload.php';
class Testo
{
    const URL = 'http://api.openweathermap.org/data/2.5/weather?q=';

    public function getWeatherByCity ($city = false)
    {
        $browser = new Buzz();
        $response = $browser->get(self::URL . $city . ',ru');
        return new Response($response->getContent());
    }
}

$tt = new Testo();
$m = $tt->getWeatherByCity();
var_dump($m);
//echo $m->getPressure();