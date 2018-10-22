<?php
declare(strict_types = 1);

/**
 * 
 */
class Product
{
	private $name;
	private $cost;

	function __construct(string $name, float $cost)
	{
		$this->setName($name);
		$this->setCost($cost);
	}

	public function getName() {
		return $this->name;
	}

	private function setName(string $name){
		if (!$name || is_null($name)  || empty($name)) {
			throw new Exception("Name cannot be empty");
		}

		$this->name = $name;
	}

	public function getCost() {
		return $this->cost;
	}

	private function setCost(float $cost){
		if ($cost < 0) {
			throw new Exception("Money cannot be negative");
		}

		$this->cost = $cost;
	}
}
?>