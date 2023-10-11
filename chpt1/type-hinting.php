<?php

class typehinting
{
    public $name;
    public $numOfPlays;

    /**
     * @param string $name
     * @param int $numOfPlays
     */
    public function __construct(string $name, int $numOfPlays)
    {
        $this->name = $name;
        $this->numOfPlays = $numOfPlays;
    }
}
