<?php
declare(strict_types = 1);
/**
 * 
 */
class Person
{
	private $firstName;
	private $lastName;
	private $birthday;
	private $parent;
	private $children;

	function __construct(string $firstName = null,	string $lastName = null, string $birthday = null)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthday = $birthday;
		$this->parent = [];
		$this->children = [];
	}

	public function setChild($child){
		$this->children[] = $child;
	}

	public function getFullName(){
		return $this->firstName." ".$this->lastName;
	}

	public function setFirstName(string $firstName){
		$this->firstName = $firstName;
	}

	public function setLastName(string $lastName){
		$this->lastName = $lastName;
	}

	public function getBirthday(){
		return $this->birthday;
	}

	public function setBirthday(string $birthday){
		$this->birthday = $birthday;
	}

	public function getParent(){
		return $this->parent;
	}

	public function setParent($parent){
		$this->parent[] = $parent;
	}

	public function getChildren(){
		return $this->children;
	}
}
?>