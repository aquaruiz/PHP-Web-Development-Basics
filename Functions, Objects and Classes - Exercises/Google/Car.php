<?php

class Car
{
    private $model;
    private $speed;

    /**
     * Car constructor.
     * @param $model
     * @param $speed
     */
    public function __construct($model, $speed)
    {
        $this->model = $model;
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    public function __toString(): string
    {
        return "{$this->getModel()} {$this->getSpeed()}";
    }
}