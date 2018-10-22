<?php
declare(strict_types = 1); 
/**
 * 
 */
class Pizza
{
	private $name;
	private $dough;
	private $toppings;
	private $numberToppings;

	function __construct(string $name, Dough $dough, int $numberToppings)
	{
		$this->setName($name);
		$this->setDough($dough);
		$this->toppings = [];
		$this->setNumberToppings($numberToppings);
	}

	private function setName($name){
		if (empty($name) || strlen($name) > 15) {
			throw new Exception("Pizza name should be between 1 and 15 symbols");
			
		} 

		$this->name = $name;
	}

	private function setDough(Dough $dough){
		$this->dough = $dough;
	}

	public function addTopping(Topping $topping){
		$this->toppings[] = $topping;
	}

	public function getToppings(){
		return count($this->toppings);
	}

	private function setNumberToppings(int $numberToppings){
		if ($numberToppings <= 0 || $numberToppings > 10) {
			throw new Exception("Number of toppings should be in range [0..10].");
		}
		
		$this->numberToppings = $numberToppings;
	}

	public function calcTotalCalories(){
		$totalCals = 0;
		$doughCals = $this->dough->calcCalories();
		$totalCals += $doughCals;

		foreach ($this->toppings as $topping) {
			$currentToppingCalcs = $topping->calcCalories();
			$totalCals += $currentToppingCalcs;
		}

		return $totalCals;
	}

	public function __toString(){
		$calories = number_format($this->calcTotalCalories(), 2, ".", "");
		return "$this->name - {$calories} Calories.";
	}
}
?>