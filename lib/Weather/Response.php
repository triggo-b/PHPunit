<?php
namespace Weather;

class Response
{
    public function __construct($weatherList)
    {
        $this->weatherInfo = json_decode($weatherList);
    }

    public function getPressure()
    {
       return $this->weatherInfo->main->pressure;
    }

    public function getCity()
    {
       return $this->weatherInfo->name;
    }

    public function getWindSpeed()
    {
        return $this->weatherInfo->wind->speed . " м/с";
    }

    public function getTemperature()
    {
        return round($this->weatherInfo->main->temp - 273.15, 2) .  " &deg;С";
    }
}