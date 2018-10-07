<?php

class Car
{
    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $distance;

    /**
     * Car constructor.
     * @param $speed
     * @param $fuel
     * @param $fuelEconomy
     */
    public function __construct($speed, $fuel, $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
    }

    public function travel($distance){
        $possibleDistance = ($this->fuel / $this->fuelEconomy) * 100;

        if ($possibleDistance >= $distance) {
            $fuelNeeded = ($distance / 100) * $this->fuelEconomy;
            $this->distance += $distance;
            $this->fuel -= $fuelNeeded;
        } else {
            $this->distance += $possibleDistance;
            $this->fuel = 0;
        }
    }

    public function refuel($fuel){
        $this->fuel += $fuel;
    }

    public function distance(){
        $distance= number_format($this->distance, 1, ".", "");
        echo "Total Distance: {$distance}" . PHP_EOL;
    }

    public function time(){
        $timeDecimal = $this->distance / $this->speed;
        $hours = (int)$timeDecimal;
        $mins = round(($timeDecimal - $hours) * 60);
        echo "Total Time: {$hours} hours and {$mins} minutes" . PHP_EOL;
    }

    public function fuel(){
        $fuel = number_format($this->fuel, 1, ".", "");
        echo "Fuel left: {$fuel} liters" . PHP_EOL;
    }
}