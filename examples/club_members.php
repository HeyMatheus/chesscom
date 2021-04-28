<?php

use HeyMatheus\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$members = $api->getClubMembers("streamers");

$weekly = $members->weekly;
$monthly = $members->monthly;
$all_time = $members->all_time;

print_r($all_time);
