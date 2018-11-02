<?php
declare(strict_types = 1);
/**
 * 
 */
class Bus extends Vehicle
{
	public function Drive($distance){
		$this->fuelComsumptionLitersPerKm += 1.4;
		$this->DriveThatBus($distance);
	}

	public function DriveEmpty($distance){
		$this->DriveThatBus($distance);
	}

	private function DriveThatBus($distance){
		$usedFuel = $distance * $this->fuelComsumptionLitersPerKm;
		
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