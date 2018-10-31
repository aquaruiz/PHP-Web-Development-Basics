<?php
declare(strict_types = 1);

/**
 * 
 */
class SpecialisedSoldier extends Privat
{
	private $corp;

	public function __construct(?string $id, ?string $firstName, ?string $lastName, ?float $salary, string $corp)	{
		parent::__construct($id, $firstName, $lastName, $salary);
		$this->corp = $corp;
	}

	public function __toString(){
		$salary = number_format($this->salary, 2, ".", "");
		return "Name: {$this->firstName} {$this->lastName} Id: {$this->id} Salary: {$salary}".PHP_EOL."Corps: {$this->corp}";
	}
}
?>