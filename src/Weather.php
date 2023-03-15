<?php

namespace WayWay\Weather;

use WayWay\Weather\API\WeatherClient;

class Weather
{
    private string $location;
    private WeatherClient $client;

    public function __construct($apiKey)
    {
        $this->client = new WeatherClient($apiKey);
    }

    public function location(string $location)
    {
        $this->location = $location;
        return $this;
    }

    public function get()
    {
        $this->client->request($this->location);
    }
}
