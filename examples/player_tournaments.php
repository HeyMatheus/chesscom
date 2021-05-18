<?php

use MTGeek\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$tournaments = $api->getPlayerTournaments("Chessbrah");

print_r($tournaments);
