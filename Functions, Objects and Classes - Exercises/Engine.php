<?php

class Engine
{
    /*
     * @var int
     */
    private $speed;
    private $power;

    /**
     * Engine constructor.
     * @param $speed
     * @param $power
     */
    public function __construct(int $speed, int $power)
    {
        $this->speed = $speed;
        $this->power = $power;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }
}