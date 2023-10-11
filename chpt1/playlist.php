<?php

class Playlist
{
    public $songs = [];

    public function addSong(typehinting $song)
    {
        $this->songs[] = $song;
    }

//    make sure we get an integer back when we ask for length of playlist
    public function getLength(): int
    {
        return count($this->songs);
    }
}
