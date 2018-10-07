<?php

class Car
{
    private $model;
    private $engine;
    private $weight;
    private $color;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $weight
     * @param $color
     */
    public function __construct(string $model, Engine $engine, string $weight = "n/a", string $color = "n/a")
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->setWeight($weight);
        $this->setColor($color);
    }

    /**
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @param float $weight
     */
    public function setWeight(string $weight = "n/a"): void
    {
        $this->weight = $weight;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color = "n/a"): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    public function __toString():string
    {
        return "{$this->getModel()}:" . PHP_EOL .
            "  {$this->getEngine()->getModel()}:" . PHP_EOL .
            "    Power: {$this->getEngine()->getPower()}" . PHP_EOL .
            "    Displacement: {$this->getEngine()->getDisplacement()}" . PHP_EOL .
            "    Efficiency: {$this->getEngine()->getEfficiency()}" . PHP_EOL .
            "  Weight: {$this->getWeight()}" . PHP_EOL .
            "  Color: {$this->getColor()}" . PHP_EOL;
    }
}