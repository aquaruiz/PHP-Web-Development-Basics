<?php
declare(strict_types = 1);
/**
 * 
 */

class Person
{
	private $name;
	private $age;
	
	public function __construct(string $name, int $age)
	{
		$this->setName($name);
		$this->setAge($age);
	}

	protected function setAge(int $age) {
		if ($age < 0) {
			throw new Exception("Age must be positive!");
		} 

		$this->age = $age;		
	}

	protected function setName($name){
		if (strlen($name) < 3) {
			throw new Exception("Name’s length should not be less than 3 symbols!");
			
		}

		$this->name = $name;
	}
}
?>