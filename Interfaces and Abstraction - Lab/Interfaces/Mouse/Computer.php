<?php
declare (strict_types = 1);

 /**
 * 
 */
abstract class Computer
{
	private $processor;
	private $ram;

	public function __construct(string $processor, string $ram)
	{
		$this->processor = $processor;
		$this->ram = $ram;
	}

	public function click(bool $leftClick, bool $rightClick){
		return "Left button has "($leftClick ? "" : "not") . " been clicked." >PHP_EOL .
		"Right button has "($rightClick ? "" : "not") . " been clicked.";
		;
	}

	public function move(int $currentX, int $currentY, int $offesetX, int $offesetY){
		$newX = $currentX + $offesetX;
		$newY = $currentY + $offesetY;
		return ["X" => $newX,
				"Y" => $newY];
	}
}
?>