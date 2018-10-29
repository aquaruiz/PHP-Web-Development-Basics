<?php
declare(strict_types = 1);
/**
 * 
 */
class Engineer extends SpecialisedSoldier
{
	private setRepairs = [];

	public function addRepair(Repair $repair){
		$this->setRepairs[] = $repair;
	}

	public function __toString(){
		$output = parent::__toString().PHP_EOL;
		$output .= "Repairs:".PHP_EOL;

		foreach ($this->setRepairs as $repair) {
			$output .= " {$repair->getPartName()}".PHP_EOL;
		}

		return $output;
	}
}
?>