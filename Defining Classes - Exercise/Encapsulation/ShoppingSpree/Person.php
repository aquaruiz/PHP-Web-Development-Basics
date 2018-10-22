<?php
declare(strict_types = 1);
// spl_autoload_register();
/**
 * 
 */
class Person
{
	private $name;
	private $money;
	private $bagProducts;
	
	function __construct(string $name, float $money, $bagProducts = [])
	{
		$this->setName($name);
		$this->setMoney($money);
		$this->bagProducts = [];
	}

	private function setName(string $name){
		if (!$name || is_null($name) || empty($name)) {
			throw new Exception("Name cannot be empty");
		}

		$this->name = $name;
	}

	public function getMoney() {
		return $this->money;
	}

	private function setMoney(float $money){
		if ($money < 0) {
			throw new Exception("Money cannot be negative");
		}

		$this->money = $money;
	}

	public function buyItem(Product $product){
		$cost = $product->getCost();
		if ($cost > $this->money) {
			echo "{$this->name} can't afford {$product->getName()}" . PHP_EOL;
		} else {
			$this->setMoney($this->money - $cost);
			$this->bagProducts[] = $product->getName();
			echo "$this->name bought {$product->getName()}" . PHP_EOL;
		}
	}

	public function __toString() {
		if (empty($this->bagProducts)) {
			return "$this->name - Nothing bought";
		}

		return "$this->name - " . implode(",", $this->bagProducts) . PHP_EOL;
	}
}
?>