<?php
/**
 * 
 */
class Citizen implements iIdable, iBuyer
{
	private $name;
	private $age;
	private $id;
	private $birthday;
	private $food = 0;

	public function __construct(string $name, int $age, string $id, string $birthday)
	{
		$this->name = $name;
		$this->age = $age;
		$this->id = $id;
		$this->birthday = $birthday;
	}

	public function getId(){
		return $this->id;
	}

	public function getBirthYear(){
		$birthDate = explode("/", $this->birthday);
		$year = array_pop($birthDate);
		return $year;
	}
	
	public function getName(){
		return $this->name;
	}
		
	public function getBirthday(){
		return $this->birthday;
	}

	public function isFakeId(string $idPart){
		$str = substr($this->id, -strlen($idPart));
		return $str == $idPart;
	}

	public function getFoodAmount(){
		return $this->food;
	}
	
	public function buyFood(){
		$this->food += 10;
	} 
}
?>