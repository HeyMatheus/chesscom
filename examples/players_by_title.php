<?php

use Theuzin\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$grandmasters = $api->getTitledPlayers("GM");

print_r($grandmasters);
