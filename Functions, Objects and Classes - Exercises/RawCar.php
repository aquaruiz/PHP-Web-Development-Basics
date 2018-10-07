<?php

class RawCar
{
    private $model;
    private $engine;
    private $cargo;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $cargo
     */
    public function __construct($model, $engine, $cargo)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tires = [];
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @return Cargo
     */
    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    /**
     * @return array
     */
    public function getTires(): array
    {
        return $this->tires;
    }

    public function addTire(Tire $tire): void{
        $this->tires[] = $tire;
    }
}