<?php

use Theuzin\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$profile = $api->getPlayerProfile("Hikaru");

print_r($profile);
