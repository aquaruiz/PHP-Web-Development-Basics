<?php
declare(strict_types = 1);
spl_autoload_register();

/**
 * 
 */
class Citizen implements Person
{
	private $name;
	private $age; 

	function __construct(string $name, int $age)
	{
		$this->setName($name);
		$this->setAge($age);
	}

	public function setName(string $name){
		$this->name = $name;
	}

	public function setAge(int $age){
		$this->age = $age;
	}

	public function __toString(){
		return $this->name . PHP_EOL . $this->age;
	}
}
?>