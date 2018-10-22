<?php
declare(strict_types = 1);
/**
 * 
 */
class Cat extends Animal
{
	public function __construct(string $name, int $age, string $gender, string $type = "Cat")
	{
		parent::__construct($name, $age, $gender, $type = "Cat");
		parent::setSound("MiauMiau");
	}
}
?>