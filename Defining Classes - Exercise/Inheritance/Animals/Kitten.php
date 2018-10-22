<?php
declare(strict_types = 1);
/**
 * 
 */
class Kitten extends Cat
{
	public function __construct(string $name, int $age, string $gender = "female", string $type = "Kitten")
	{
		parent::__construct($name, $age, $gender, $type = "Kitten");
		parent::setSound("Miau");
	}
}
?>