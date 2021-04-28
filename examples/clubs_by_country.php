<?php

use HeyMatheus\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$clubs = $api->getClubsByCountry("BR");

print_r($clubs);
