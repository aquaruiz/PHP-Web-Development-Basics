<?php
declare(strict_types = 1);

/**
 * 
 */
class MobilePhone extends Mobile implements TouchScreen
{
	private $size;
	function __construct(string $operator, bool $canCall, float $battery, string $size)
	{
		parent::__construct($operator, $canCall, $battery);
		$this->size = $size;
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