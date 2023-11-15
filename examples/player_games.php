<?php

use Flowtt\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
// All games played by Hikaru on April, 2021
$games = $api->getPlayerGamesByDate("Hikaru", "2021", "04");

$firstGameOfApril = $games[0];

print_r($firstGameOfApril);
