<?php
declare(strict_types = 1);
/**
 * 
 */
class Tomcat extends Cat
{
	public function __construct(string $name, int $age, string $gender = "male", string $type = "Tomcat")
	{
		parent::__construct($name, $age, $gender, $type = "Tomcat");
		parent::setSound("Give me one million b***h");
	}
}
?>