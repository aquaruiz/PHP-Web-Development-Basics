<?php
declare(strict_types = 1);
/**
 * 
 */
class Car extends Vehicle
{
	public function Drive($distance){
		$usedFuel = $distance * $this->fuelComsumptionLitersPerKm;
		if ($this->seasonMode == "summer") {
			$usedFuel += 0.9 * $distance;
		}
		
		if ($this->fuelQuantity >= $usedFuel) {
			parent::decreaseFuelQuantityWith($usedFuel);
			parent::printSuccess($distance);
		} else {
			parent::printNoFuel();
		}
	}

	public function Refuel($liters){
		if ($this->tankCapacity - $this->fuelQuantity < $liters) {
			echo "Cannot fit fuel in tank" . PHP_EOL;
		} else {
			parent::increaseFuelQuantityWith($liters);
		}
	}
}
?>