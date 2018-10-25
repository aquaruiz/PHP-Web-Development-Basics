<?php
/**
 * 
 */
class Tablet extends Mobile implements TouchScreen
{
	private $stdResolution;

	function __construct(string $operator, bool $canCall, float $battery, string $stdResolution)
	{
		parent::__construct($operator, $canCall, $battery);
		$this->stdResolution = $stdResolution;
	}

	public function moveFinger(){
		echo "Finger has been moved on Touchpad.";
	}

	public function clickFinger(){
		echo "Finger has been clicked on Touchpad.";
	}

	public function writeText(){
		echo "A text has been written.";
	}
}
?>