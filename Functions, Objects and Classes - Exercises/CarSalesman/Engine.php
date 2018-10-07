<?php

class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    /**
     * Engine constructor.
     * @param $model
     * @param $power
     * @param $displacement
     * @param $efficiency
     */
    public function __construct($model, $power, $displacement = "n/a", $efficiency = "n/a")
    {
        $this->model = $model;
        $this->power = $power;
        $this->setDisplacement($displacement);
        $this->setEfficiency($efficiency);
    }

    /**
     * @param string $displacement
     */
    public function setDisplacement($displacement = "n/a"): void
    {
        $this->displacement = $displacement;
    }

    /**
     * @param string $efficiency
     */
    public function setEfficiency($efficiency = "n/a"): void
    {
        $this->efficiency = $efficiency;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return float
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return mixed
     */
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * @return mixed
     */
    public function getEfficiency()
    {
        return $this->efficiency;
    }
}