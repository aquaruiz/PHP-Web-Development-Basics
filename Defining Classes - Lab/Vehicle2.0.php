<?php
declare(strict_types = 1);

 class Vehicle
 {
 	private $numberDoors;
 	private $color;
 	private $brand;
 	private $model;
 	private $year,

 	public function __construct(int $numberDoors, string $color, string $brand, string $model, int $year)
 	{
 		$this->setDoors($numberDoors);
 		$this->setColor($color);
 		$this->brand = $brand;
 		$this->model = $model;
 		$this->year = $year;
 	}

	/*
 	* @var void
 	*/
 	public function getDoors() : int {
 		return $this->numberDoors;
 	}

 	/*
 	* @var int
 	*/
 	protected function setDoors(int $numberDoors) : void{
 		$this->numberDoors = $numberDoors;
 	}

 	/*
 	* @ var void
 	*/

 	public function getColor() : string
	{
		return $this->color;
	}

	/*
	* @var string
 	*/
 	protected function setColor(string $color) : void {
 		$this->color = $color;
 	}

 	/**
 	* @var void
 	*/
 	public function paint(string $color) : void {
 		$this->setColor($color);
 	}

	/*
	* @var mixed
 	*/
 	public function __get($name){
       if(isset($this->{$name})) {
           return $this->{$name};
       }
       else{
           return PHP_EOL . "Property does not exist!";
       }
    }
 } 
?>