<?php
declare(strict_types = 1);

/**
 * 
 */
class Repair
{
	private $partName;
	private $hoursWorked;

	public function __construct(string $partName, int $hoursWorked)
	{
		$this->partName = $partName;
		$this->hoursWorked = $hoursWorked;
	}

	protected function getPartName(){
		return $this->partName;
	}
}
?>