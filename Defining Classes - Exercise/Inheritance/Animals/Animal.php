<?php
declare(strict_types = 1);
/**
 * 
 */
class Animal
{
	private $type;
	private $name;
	private $age;
	private $gender;
	private $sound;

	public function __construct(string $name, int $age, string $gender, string $type = "animal")
	{
		$this->type = $type;
		$this->setName($name);
		$this->setAge($age);
		$this->setGender($gender);
		$this->setSound("Not implemented!");
	}

	protected function setSound(string $sound){
		if (empty($sound) || !isset($sound)) {
			throw new Exception("Invalid input!");
		}

		$this->sound = $sound;
	}

	protected function setName(string $name){
		if (empty($name) || !isset($name)) {
			throw new Exception("Invalid input!");
		}

		$this->name = $name;
	}

	protected function setAge(int $age){
		if (empty($age) || $age < 0 || !isset($age)) {
			throw new Exception("Invalid input!");
		}

		$this->age = $age;
	}

	protected function setGender(string $gender){
		if (empty($gender)) {
			throw new Exception("Invalid input!");
		}

		$this->gender = $gender;
	}

    public function produceSound(){
    	return $this->sound;
    }

    public function __toString(){
    	return "$this->type $this->name $this->age $this->gender";
    }
}
?>