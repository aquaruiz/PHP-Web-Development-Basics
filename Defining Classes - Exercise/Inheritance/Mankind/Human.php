<?php
/**
 * 
 */
class Human
{
	private $firstName;
	private $lastName;

	function __construct(string $firstName, string $lastName)
	{
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
	}

	protected function getFirstName() : string {
		return $this->firstName;
	}

	protected function setFirstName(string $firstName){
		if ($firstName[0] != strtoupper($firstName[0])) {
			throw new Exception("Expected upper case letter!Argument: firstName");
		}

		if (strlen($firstName) < 4) {
			throw new Exception("Expected length at least 4 symbols!Argument: firstName");
		}

		$this->firstName = $firstName;
	}


	protected function getLastName() : string {
		return $this->lastName;
	}

	protected function setLastName(string $lastName){
		if ($lastName[0] != strtoupper($lastName[0])) {
			throw new Exception("Expected upper case letter!Argument: lastName");
		}

		if (strlen($lastName) < 3) {
			throw new Exception("Expected length at least 3 symbols!Argument: lastName ");
		}

		$this->lastName = $lastName;
	}
}
?>