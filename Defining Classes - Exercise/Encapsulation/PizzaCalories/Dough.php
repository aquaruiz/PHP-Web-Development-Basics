<?php 
declare(strict_types = 1); 

/**
 * 
 */
class Dough
{
	const FlourTypes = ["white", "wholegrain"];
	const BakingTechniques = ["crispy", "chewy", "homemade"];
	const Modifiers = [
		"white" => 1.5,
		"wholegrain" => 1,
		"crispy" => 0.9,
		"chewy" => 1.1,
		"homemade" => 1.0];

	private $flourType;
	private $bakingTechnique;
	private $weight;

	public function __construct(string $flourType, string $bakingTechnique, float $weight)
	{
		$this->setFlourType($flourType);
		$this->setBakingTechnique($bakingTechnique);
		$this->setWeight($weight);
	}

	private function setFlourType(string $flourType){
		if (!in_array(strtolower($flourType), self::FlourTypes)) {
			throw new Exception("Invalid type of dough.");
		} 
		
		$this->flourType = strtolower($flourType);
	}

	private function setBakingTechnique($bakingTechnique){
		if (!in_array(strtolower($bakingTechnique), self::BakingTechniques)) {
			throw new Exception("Invalid type of dough.");
		}
		
		$this->bakingTechnique = strtolower($bakingTechnique);
	}

	private function setWeight($weight){
		if ($weight < 1 || $weight > 200) {
			throw new Exception("Dough weight should be in the range [1..200].");
		} 
		
		$this->weight = $weight;
	}

	public function calcCalories(){
		$baseCalories = 2 * $this->weight;
		$totalCalories = $baseCalories * self::Modifiers[$this->flourType] * self::Modifiers[$this->bakingTechnique];
		return $totalCalories;
	}

	public function __toString(){
		return number_format($this->calcCalories(), 2, ".", "");
	}
}
?>