<?php

use Theuzin\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$clubs = $api->getPlayerClubs("GothamChess");

print_r($clubs);
