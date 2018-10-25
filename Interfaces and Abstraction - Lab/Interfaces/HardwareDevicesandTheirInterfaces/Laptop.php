<?php
declare(strict_types = 1);

/**
 * 
 */
class Laptop extends Computer implements Keyboard, Mouse, TouchScreen
{
	private $battery;

	function __construct(string $processor, string $ram, float $battery)
	{
		Parent::__construct($processor, $ram);
		$this->battery = $battery;
	}

	public function pressKey(){
		echo "Key has been pressed.";
	}

	public function changeStatus(){
		echo "Status has been changed.";
	}

	public function move(){
		echo "Mouse has been moved.";
	}

	public function click(){
		echo "Mouse has been moved.";
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