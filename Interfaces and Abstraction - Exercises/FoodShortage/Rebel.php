<?php
declare(strict_types = 1);

/**
 * 
 */
class Rebel implements iBuyer
{
	public static $usedNames = [];
	private $name;
	private $age;
	private $group;	
	private $food = 0;

	function __construct(string $name, int $age, string $group)
	{
		$this->setName($name);
		$this->age = $age;
		$this->group = $group;
	}

	public function getName(){
		return $this->name;
	}

	private function setName(string $name){
		if (in_array($name, self::$usedNames)) {
			throw new Exception("Rebel name already exists!");
		}

		self::$usedNames[] = $name;
		$this->name = $name;
	}

	public function getFoodAmount(){
		return $this->food;
	}
	
	public function buyFood(){
		$this->food += 5;
	} 
}
?>