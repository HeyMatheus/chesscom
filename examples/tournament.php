<?php

use MTGeek\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$tournament = $api->getTournamentDetails("annual-daily-tournament");

print_r($tournament);
