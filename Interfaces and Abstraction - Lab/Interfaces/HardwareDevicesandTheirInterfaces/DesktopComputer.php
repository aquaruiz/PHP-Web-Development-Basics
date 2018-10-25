<?php
declare(strict_types = 1);

/**
 * 
 */
class DesktopComputer extends Computer implements Keyboard, Mouse
{
	private $keyboardConnected;

	function __construct(string $processor, string $ram, bool $keyboardConnected)
	{
		parent::__construct($processor, $ram);
		$this->keyboardConnected = $keyboardConnected;
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
}
?>