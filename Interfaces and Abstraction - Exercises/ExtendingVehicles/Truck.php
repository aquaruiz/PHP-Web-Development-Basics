<?php
declare(strict_types = 1);
/**
 * 
 */
class Truck extends Vehicle
{
	public function Drive($distance){
		$usedFuel = $distance * $this->fuelComsumptionLitersPerKm;

		if ($this->seasonMode == "summer") {
			$usedFuel += 1.6 * $distance;
		}

		if ($this->fuelQuantity >= $usedFuel) {
			parent::decreaseFuelQuantityWith($usedFuel);
			parent::printSuccess($distance);
		} else {
			parent::printNoFuel();
		}
	}

	public function Refuel($liters){
		$liters *= 0.95;
		
		parent::increaseFuelQuantityWith($liters);
	}	
}
?>