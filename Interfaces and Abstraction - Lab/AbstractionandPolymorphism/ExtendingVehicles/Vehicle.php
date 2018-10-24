<?php
declare(strict_types = 1);
/**
 * 
 */
abstract class Vehicle
{
	protected $tankCapacity;
	protected $fuelQuantity;
	protected $fuelComsumptionLitersPerKm;
	protected $seasonMode;

	public function __construct(float $fuelQuantity, float $fuelComsumptionLitersPerKm, float $tankCapacity)
	{
		$this->fuelQuantity = $fuelQuantity;
		$this->fuelComsumptionLitersPerKm = $fuelComsumptionLitersPerKm;
		$this->tankCapacity = $tankCapacity;
		$this->seasonMode = "summer";
	}

	protected function increaseFuelQuantityWith($liters){
		if ($liters <= 0) {
			echo "Fuel must be a positive number" . PHP_EOL;
		}

		$this->fuelQuantity += $liters;
	}

	protected function decreaseFuelQuantityWith($liters){
		if ($liters <= 0) {
			echo "Fuel must be a positive number" . PHP_EOL;
		}
		
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

	public function getClassName(){
		$nameClass = new ReflectionClass($this);
		$name = $nameClass->getName();
		return $name;
	}

	public function __toString(){
		return $this->getClassName() . ": " . number_format($this->fuelQuantity, 2, ".", "") . PHP_EOL;
	}
}
?>