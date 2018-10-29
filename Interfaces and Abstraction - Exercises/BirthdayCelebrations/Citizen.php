<?php
/**
 * 
 */
class Citizen implements iIdable
{
	private $name;
	private $age;
	private $id;
	private $birthday;

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

	
	public function getBirthday(){
		return $this->birthday;
	}

	public function isFakeId(string $idPart){
		$str = substr($this->id, -strlen($idPart));
		return $str == $idPart;
	}
}
?>