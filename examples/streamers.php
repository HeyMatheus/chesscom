<?php

use HeyMatheus\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$streamers = $api->getStreamers();

print_r($streamers);
