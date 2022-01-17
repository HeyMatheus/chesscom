<?php

use Plugin\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;

$puzzle = $api->getDailyPuzzle();
$random = $api->getRandomDailyPuzzle();

print_r($puzzle);
