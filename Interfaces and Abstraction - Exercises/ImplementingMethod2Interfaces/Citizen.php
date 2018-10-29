<?php
declare(strict_types = 1);
spl_autoload_register();

/**
 * 
 */
class Citizen implements Identifiable, Birthable
{
	private $name;
	private $age; 
	private $id;
	private $birthDate;

	public function __construct(string $name, int $age, string $id, string $birthDate)
	{
		$this->setName($name);
		$this->setAge($age);
		$this->setIdBirtdate($id, $birthDate);
	}

	public function setName(string $name){
		$this->name = $name;
	}

	public function setAge(int $age){
		$this->age = $age;
	}

	public function setIdBirtdate(string $id, string $birthDate){
		$this->id = $id;
		$this->birthDate = $birthDate;
	}

	public function __toString(){
		return $this->name.PHP_EOL.$this->age.PHP_EOL.$this->id.PHP_EOL.$this->birthDate;
	}
}
?>