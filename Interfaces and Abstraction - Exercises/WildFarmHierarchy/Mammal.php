<?php 
/**
 * 
 */
abstract class Mammal extends Animal
{
	protected $livingRegion;

	function __construct(string $animalName, string $animalType, float $animalWeight, string $livingRegion)
	{
		parent::__construct($animalName, $animalType, $animalWeight);
		$this->livingRegion = $livingRegion;
	}

	abstract public function makeSound();
	abstract public function eat(Food $food);
}
 ?>