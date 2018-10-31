<?php
declare(strict_types = 1);

/**
 * 
 */
class LeutenantGeneral extends Privat
{
	protected $privats;

	public function __construct(?string $id, ?string $firstName, ?string $lastName, ?float $salary)
	{
		parent::__construct($id, $firstName, $lastName, $salary);
		$this->privats = []; 
	}

	public function addPrivate(Privat $private){
		$this->privats[] = $private;
	}

	public function __toString(){
		$output = parent::__toString().PHP_EOL;
		$output .= "Privates:".PHP_EOL;

		foreach ($this->privats as $privat) {
			$output .= "  ";
			$output .= $privat->__toString().PHP_EOL;
		}

		return $output;
	}
}
?>