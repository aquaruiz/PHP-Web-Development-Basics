<?php
declare(strict_types = 1);

/**
 * 
 */
class Repair
{
	private $partName;
	private $hoursWorked;

	public function __construct(?string $partName, ?int $hoursWorked)
	{
		$this->partName = $partName;
		$this->hoursWorked = $hoursWorked;
	}

	public function getPartName(){
		return $this->partName;
	}

	public function getHours(){
		return $this->hoursWorked;
	}
}
?>