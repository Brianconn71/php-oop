<?php

require_once 'playlist.php';
require_once 'type-hinting.php';

$playlist = new Playlist();

$song1 = new typehinting('hero', 435);
$song2 = new typehinting('Believe', 89);

$playlist->addSong($song1);
$playlist->addSong($song2);

if ($playlist->getLength() < 10) {
    print 'short playlist...' . PHP_EOL;
}
