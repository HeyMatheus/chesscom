<?php

use HeyMatheus\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$stats = $api->getPlayerStats("GothamChess");

$blitz = $stats->chess_blitz;
echo "-> My blitz stats:" . PHP_EOL;
echo "Current rating: {$blitz->last->rating}" . PHP_EOL;
echo "Best rating: {$blitz->best->rating}" . PHP_EOL;

$bullet = $stats->chess_bullet;
echo "-> My bullet stats:" . PHP_EOL;
echo "Current rating: {$bullet->last->rating}" . PHP_EOL;
echo "Best rating: {$bullet->best->rating}" . PHP_EOL;
