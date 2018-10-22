<?php
declare(strict_types = 1);

/**
 * 
 */

class Child extends Person
{
	protected function setAge(int $age){
		if ($age > 16) {
			throw new Exception("Child’s age must be less than 16!");
		}

		parent::setAge($age);
	}
}
?>