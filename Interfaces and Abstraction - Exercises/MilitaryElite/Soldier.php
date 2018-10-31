<?php
declare(strict_types = 1);

/**
 * 
 */
class Soldier
{
	protected $id;
	protected $firstName;
	protected $lastName;
	
	public function __construct(?string $id, ?string $firstName, ?string $lastName)
	{
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function __toString(){
		return "Name: {$this->firstName} {$this->lastName} Id: {$this->id}";
	}
}
?>