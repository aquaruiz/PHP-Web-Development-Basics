<?php 
declare(strict_types = 1); 

/**
 * 
 */
class Topping
{
	const TopingTypes = ["meat", "veggies", "cheese", "sauce"];
	const Modifiers = [
		"meat" => 1.2,
		"veggies" => 0.8,
		"cheese" => 1.1,
		"sauce" => 0.9];

	private $type;
	private $weight;

	public function __construct(string $type, string $weight){
		$this->setType($type);
		$this->setWeight($weight);
	}

	private function setType(string $type){
		if (!in_array(strtolower($type), self::TopingTypes)) {
			throw new Exception("Cannot place $type on top of your pizza.");
		} 
		
		$this->type = strtolower($type);
	}

	private function setWeight($weight){
		if ($weight < 1 || $weight > 50) {
			throw new Exception(strtoupper($this->type[0]) . substr($this->type, 1) . " weight should be in the range [1..50].");
		} 
		
		$this->weight = $weight;
	}

	public function calcCalories(){
		$baseCalories = 2 * $this->weight;
		$totalCalories = $baseCalories * self::Modifiers[$this->type];
		return $totalCalories;
	}

	public function __toString(){
		return number_format($this->calcCalories(), 2, ".", "");
	}
}
?>