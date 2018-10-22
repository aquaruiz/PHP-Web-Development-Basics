<?php
declare(strict_types = 1);
/**
 * 
 */
class Frog extends Animal
{
	public function __construct(string $name, int $age, string $gender, string $type = "Frog")
	{
		parent::__construct($name, $age, $gender, $type = "Frog");
		parent::setSound("Frogggg");
	}
}
?>