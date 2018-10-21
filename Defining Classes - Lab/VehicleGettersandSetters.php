<?php
declare(strict_types = 1);


 class Vehicle
 {
 	private $numberDoors;
 	private $color;

 	public function __construct(int $numberDoors, string $color)
 	{
 		$this->setDoors($numberDoors);
 		$this->setColor($color);
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
 	public function setDoors(int $numberDoors) : void{
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
 	public function setColor(string $color) : void {
 		$this->color = $color;
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

 $myVehicle = new Vehicle(2, "orange");
 // var_dump($myVehicle);
 var_dump($myVehicle->getColor());
 echo $myVehicle->__get("numberDoors");
 echo $myVehicle->__get("engine");

?>