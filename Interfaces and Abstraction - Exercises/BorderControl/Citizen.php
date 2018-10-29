<?php
/**
 * 
 */
class Citizen implements iIdable
{
	private $name;
	private $age;
	private $id;

	public function __construct(string $name, int $age, string $id)
	{
		$this->name = $name;
		$this->age = $age;
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function isFakeId(string $idPart){
		$str = substr($this->id, -strlen($idPart));
		return $str == $idPart;
	}
}
?>