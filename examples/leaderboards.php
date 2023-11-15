<?php

use Flowtt\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$leaderboards = $api->getLeaderboards();

echo "Top 5 Blitz Players" . PHP_EOL;
$blitz = array_slice($leaderboards->live_blitz, 0, 5);
print_r($blitz);

echo "Top 5 Bullet Players" . PHP_EOL;
$bullet = array_slice($leaderboards->live_bullet, 0, 5);
print_r($bullet);

echo "Top 5 Rapid Players" . PHP_EOL;
$rapid = array_slice($leaderboards->live_rapid, 0, 5);
print_r($rapid);
