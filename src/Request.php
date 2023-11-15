<?php

declare(strict_types=1);

namespace Flowtt;

use GuzzleHttp\Client;

abstract class Request
{
    public function __construct(
        private Client $client = new Client([
            'base_uri' => 'https://api.chess.com/pub/',
        ])
    ) {
    }

    protected function getResponseAsJson($value)
    {
        $response = $this->client->get($value);

        $json = $response->getBody()->__toString();

        return json_decode($json);
    }
}
