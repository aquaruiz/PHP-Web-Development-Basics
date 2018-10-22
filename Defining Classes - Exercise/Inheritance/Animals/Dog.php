<?php
declare(strict_types = 1);
/**
 * 
 */
class Dog extends Animal
{
	public function __construct(string $name, int $age, string $gender, string $type = "Dog")
	{
		parent::__construct($name, $age, $gender, $type = "Dog");
		parent::setSound("BauBau");
	}
}
?>