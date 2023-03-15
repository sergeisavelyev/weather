<?php

namespace Wayway\Weather\API;

use GuzzleHttp\Client;

class WeatherClient
{
    private const HOST = 'http://api.weatherapi.com/v1/current.json';

    private $client;

    public function __construct(
        private readonly string $apiKey
    ) {
        $this->client = new Client();
    }

    public function request(string $query): array
    {
        $endpoint = self::HOST . '?' . http_build_query([
            'key' => $this->apiKey,
            'q' => $query,
        ]);

        $responce = $this->client->get($endpoint);
        return json_decode($responce->getBody()->getContents(), true);
    }
}
