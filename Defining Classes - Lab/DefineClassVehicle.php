<?php
declare(strict_types = 1);


 class Vehicle
 {
 	private $numberDoors;
 	private $color;

 	public function __construct(int $numberDoors, string $color)
 	{
 		$this->numberDoors = $numberDoors;
 		$this->color = $color;
 	}
 } 

 $myVehicle = new Vehicle(2, "orange");
 var_dump($myVehicle);
?>