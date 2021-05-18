<?php

use MTGeek\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$club = $api->getClubProfile("streamers");

print_r($club);
