<?php

class Cargo
{
    private $weight;
    private $type;

    /**
     * Cargo constructor.
     * @param $weight
     * @param $type
     */
    public function __construct(int $weight, string $type)
    {
        $this->weight = $weight;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}