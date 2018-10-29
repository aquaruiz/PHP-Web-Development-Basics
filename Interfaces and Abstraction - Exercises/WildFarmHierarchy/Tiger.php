<?php 
/**
 * 
 */
class Tiger extends Felime
{
	public function eat(Food $food){
		$foodType = $food->getFoodType();
		if ($foodType == "Meat") {
			$this->foodEaten += $food->getFoodQnty();
		} else {
			echo "Tigers are not eating that type of food!".PHP_EOL;
		}
	}

	public function makeSound(){
		echo "ROAAR!!!".PHP_EOL;
	}

	public function __toString(){
		return "{$this->animalType}[{$this->animalName}, {$this->animalWeight}, {$this->livingRegion}, {$this->foodEaten}]".PHP_EOL;
	}
}
 ?>