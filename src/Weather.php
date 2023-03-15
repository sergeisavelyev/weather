<?php

namespace WayWay\Weather;

use WayWay\Weather\API\WeatherClient;
use WayWay\Weather\Models\Result;
use IlluminateAgnostic\Arr\Support\Arr;

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
        $data = $this->client->request($this->location);

        return (new Result())
            ->setCelsius(Arr::get($data, 'current.temp_c', 0))
            ->setFarenheits(Arr::get($data, 'current.temp_c', 0)
            );
    }
}
