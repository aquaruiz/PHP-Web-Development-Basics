<?php 
declare(strict_types = 1);

/**
 * 
 */
class Spy extends Soldier
{
	private $codeNumber;

	public function __construct(?string $id, ?string $firstName, ?string $lastName, ?int $codeNumber)	{
		parent::__construct($id, $firstName, $lastName);
		$this->codeNumber = $codeNumber;
	}

	public function __toString(){
		$output = parent::__toString().PHP_EOL;
		$output .= "Code Number: {$this->codeNumber}";
	}
}
?>