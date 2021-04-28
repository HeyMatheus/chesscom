<?php

namespace HeyMatheus;

use GuzzleHttp\Client;

abstract class Request
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.chess.com/pub/',
        ]);
    }

    public function getResponseAsJson($value)
    {
        $response = $this->client->get($value)->getBody();

        return \json_decode($response);
    }
}
