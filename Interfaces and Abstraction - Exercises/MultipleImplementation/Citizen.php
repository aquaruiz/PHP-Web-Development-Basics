<?php
declare(strict_types = 1);

/**
 * 
 */
class Citizen implements Person
{
	private $id;
	private $name;
	private $age; 
	private $birthDate;

	public function __construct(string $name, int $age, string $id, string $birthDate)
	{
		$this->setName($name);
		$this->setAge($age);
		$this->setId($id);
		$this->setBirthday($birthDate);
	}

	public function setId(string $id){
		$this->id = $id;
	}

	public function setName(string $name){
		$this->name = $name;
	}

	public function setAge(int $age){
		$this->age = $age;
	}

	public function setBirthday(string $birthDate){
		$this->birthDate = $birthDate;
	}

	public function __toString(){
		return $this->name.PHP_EOL.$this->age.PHP_EOL.$this->id.PHP_EOL.$this->birthDate;
	}
}
?>