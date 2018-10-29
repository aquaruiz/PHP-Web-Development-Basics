<?php 
/**
 * 
 */
abstract class Animal
{
	protected $animalName;
	protected $animalType;
	protected $animalWeight;
	protected $foodEaten;

	function __construct(string $animalName, string $animalType, float $animalWeight)
	{
		$this->animalName = $animalName;
		$this->animalType = $animalType;
		$this->animalWeight = $animalWeight;
		$this->foodEaten = 0;
	}

	abstract public function makeSound();
	abstract public function eat(Food $food);
}
 ?>