<?php 
/**
 * 
 */
class Mouse extends Mammal
{
	public function eat(Food $food){
		$foodType = $food->getFoodType();
		if ($foodType == "Vegetable") {
			$this->foodEaten += $food->getFoodQnty();
		} else {
			echo "Mouses are not eating that type of food!".PHP_EOL;
		}
	}

	public function makeSound(){
		echo "SQUEEEAAAK!".PHP_EOL;
	}
	
	public function __toString(){
		return "{$this->animalType}[{$this->animalName}, {$this->animalWeight}, {$this->livingRegion}, {$this->foodEaten}]".PHP_EOL;
	}
}
 ?>