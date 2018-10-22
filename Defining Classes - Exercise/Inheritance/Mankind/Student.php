<?php
/**
 * 
 */
class Student extends Human
{
	private $facultyNumber;
	
	public function __construct(string $firstName, string $lastName, string $facultyNumber)
	{
		parent::__construct($firstName, $lastName);
		$this->setFacultyNumber($facultyNumber);
	}

	protected function setFacultyNumber(string $facultyNumber){
		if (strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10) {
			throw new Exception("Invalid faculty number!");
		}

		$this->facultyNumber = $facultyNumber;
	}

	public function __toString(){
		$fname = parent::getFirstName();
		$lname = parent::getLastName();
		return "First Name: {$fname}\nLast Name: {$lname}\nFaculty number: {$this->facultyNumber}";
	}
}
?>