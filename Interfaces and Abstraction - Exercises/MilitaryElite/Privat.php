<?php
declare(strict_types = 1);

/**
 * 
 */
class Privat extends Soldier
{
	protected $salary;

	public function __construct(string $id, string $firstName, string $lastName, float $salary)
	{
		parent::__construct($id, $firstName, $lastName);
		$this->salary = $salary; 
	}

	public function getId(){
		return $this->id;
	}

	public function __toString(){
		$output = parent::__toString();
		$output .= " Salary: {$this->salary}";
		return $output;
	}
}
?>