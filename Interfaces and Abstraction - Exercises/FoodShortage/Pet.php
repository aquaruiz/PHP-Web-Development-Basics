<?php
/**
 * 
 */
class Pet implements iIdable
{
	private $name;
	private $birthday;
	private $id;

	function __construct(string $name, string $birthday, string $id = "0")
	{
		$this->name = $name;
		$this->birthday = $birthday;
		$this->id = $id;
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