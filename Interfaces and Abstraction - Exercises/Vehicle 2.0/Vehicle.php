<?php
declare(strict_types = 1);
/**
 * 
 */
abstract class Vehicle
{
	protected $fuelQuantity;
	protected $fuelComsumptionLitersPerKm;
	protected $seasonMode;

	public function __construct(float $fuelQuantity, float $fuelComsumptionLitersPerKm)
	{
		$this->fuelQuantity = $fuelQuantity;
		$this->fuelComsumptionLitersPerKm = $fuelComsumptionLitersPerKm;
		$this->seasonMode = "summer";
	}

	protected function increaseFuelQuantityWith($liters){
		$this->fuelQuantity += $liters;
	}

	protected function decreaseFuelQuantityWith($liters){
		$this->fuelQuantity -= $liters;
	}

	protected function printSuccess($distance){
		echo $this->getClassName() . " travelled {$distance} km" . PHP_EOL;
	}

	protected function printNoFuel(){
		echo $this->getClassName() . " needs refueling" . PHP_EOL;
	}

	abstract public function Drive($distance);
	abstract public function Refuel($liters);

	private function getClassName(){
		$nameClass = new ReflectionClass($this);
		$name = $nameClass->getName();
		return $name;
	}

	public function __toString(){
		return $this->getClassName() . ": " . number_format($this->fuelQuantity, 2, ".", "") . PHP_EOL;
	}
}
?>