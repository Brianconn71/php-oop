<?php

// this will stop php from guessing and trying to cast eg integers as strings.
declare(strict_types=1);
require_once 'type-hinting.php';

$song = new typehinting('1234', 789);
// Php will sometimes guess what you are trying to do and may cast integers as strings.
var_dump($song->name);
print $song->numOfPlays . PHP_EOL;