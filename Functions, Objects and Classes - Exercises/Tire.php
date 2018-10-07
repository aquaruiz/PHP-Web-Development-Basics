<?php
/**
 * Created by PhpStorm.
 * User: Obache
 * Date: 06.10.2018
 * Time: 15:00
 */

class Tire
{
    private $pressure;
    private $age;

    /**
     * Tire constructor.
     * @param $age
     * @param $pressure
     */
    public function __construct(float $pressure, int $age)
    {
        $this->age = $age;
        $this->pressure = $pressure;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}