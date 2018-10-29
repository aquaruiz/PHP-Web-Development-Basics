<?php
declare(strict_types = 1);
/**
 * 
 */
class Commando extends SpecialisedSoldier
{
	private $missions = [];

	public function addMission(Mission $mission){
		$this->missions[] = $mission;
	}

	public function __toString(){
		$output = parent::__toString().PHP_EOL;
		$output .= "Missions:".PHP_EOL;

		foreach ($this->missions as $mission) {
			$output .= "  Code Name: {$mission->getCodeName()} State: {$mission->getMissionState()}".PHP_EOL;
		}

		return $output;
	}
}
?>