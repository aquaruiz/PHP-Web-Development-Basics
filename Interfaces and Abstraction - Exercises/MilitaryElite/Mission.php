<?php
declare(strict_types = 1);

/**
 * 
 */
class Mission
{
	private $codeName;
	private $state;

	public function __construct(?string $codeName, string $state = "inProgress")
	{
		$this->codeName = $codeName;
		$this->state = $state;
	}

	public function CompleteMission(){
		$this->state = "finished";
	}

	public function getCodeName(){
		return $this->codeName;
	}

	public function getMissionState(){
		return $this->state;
	}
}
?>