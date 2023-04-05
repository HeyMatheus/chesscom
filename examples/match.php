<?php

use Theuzin\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$match = $api->getMatchDetails(12803);

print_r($match);
