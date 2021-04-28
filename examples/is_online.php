<?php

use HeyMatheus\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$status = $api->isOnline("Hikaru");

echo $status ? "Hikaru is online :D" . PHP_EOL : "Hikaru is offline D:" . PHP_EOL;
