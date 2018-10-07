<?php

require_once "Car.php";

list($speed, $fuel, $fuelEconomy) = explode(" ", trim(readline()));
$car = new Car(floatval($speed), floatval($fuel), floatval($fuelEconomy));

//var_dump($car);
while (strtolower($input = readline()) != "end") {
    $input = explode(" ", $input);
    $command = strtolower(array_shift($input));
    switch ($command){
        case "travel":
            $distance = array_shift($input);
            $car->travel(floatval($distance));
            break;
        case 'refuel':
            $fuel = array_shift($input);
            $car->refuel(floatval($fuel));
            break;
        case "distance":
            $car->distance();
            break;
        case "time":
            $car->time();
            break;
        case "fuel":
            $car->fuel();
            break;
    }
}