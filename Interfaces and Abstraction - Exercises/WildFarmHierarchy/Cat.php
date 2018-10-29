<?php 
/**
 * 
 */
class Cat extends Felime
{
	private $breed;

	function __construct(string $animalName, string $animalType, float $animalWeight, string $livingRegion, string $breed)
	{
		parent::__construct($animalName, $animalType, $animalWeight, $livingRegion);
		$this->breed = $breed;
	}

	public function eat(Food $food){
		$this->foodEaten += $food->getFoodQnty();
	}

	public function makeSound(){
		echo "Meowwww".PHP_EOL;
	}

	public function __toString(){
		return "{$this->animalType}[{$this->animalName}, {$this->breed}, {$this->animalWeight}, {$this->livingRegion}, {$this->foodEaten}]".PHP_EOL;
	}
}
 ?>