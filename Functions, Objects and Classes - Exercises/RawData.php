<?php

require_once "Engine.php";
require_once "Cargo.php";
require_once "Tire.php";
require_once "RawCar.php";

$n = intval(readline());

$cars = [];
for($i = 0; $i < $n; $i++){
    list($model,
        $engineSpeed,
        $enginePower,
        $cargoWeight,
        $cargoType,
        $tire1Pressure,
        $tire1Age,
        $tire2Pressure,
        $tire2Age,
        $tire3Pressure,
        $tire3Age,
        $tire4Pressure,
        $tire4Age) = explode(" ", readline());

    $engineSpeed = intval($engineSpeed);
    $enginePower = intval($enginePower);
    $cargoWeight = intval($cargoWeight);
    $tire1Age = intval($tire1Age);
    $tire2Age = intval($tire2Age);
    $tire3Age = intval($tire3Age);
    $tire4Age = intval($tire4Age);
    $tire1Pressure = floatval($tire1Pressure);
    $tire2Pressure = floatval($tire2Pressure);
    $tire3Pressure = floatval($tire3Pressure);
    $tire4Pressure = floatval($tire4Pressure);

    $engine = new Engine($engineSpeed, $enginePower);
    $cargo = new Cargo($cargoWeight, $cargoType);
    $tires = [];
    $tires[] = new Tire($tire1Pressure, $tire1Age);
    $tires[] = new Tire($tire2Pressure, $tire2Age);
    $tires[] = new Tire($tire3Pressure, $tire3Age);
    $tires[] = new Tire($tire4Pressure, $tire4Age);

    $newCar = new RawCar($model, $engine, $cargo);
    foreach ($tires as $tire){
        $newCar->addTire($tire);
    }

    $cars[] = $newCar;
}

$command = readline();

if($command == "fragile"){
    $output = array_filter($cars, function (RawCar $car){ return $car->getCargo()->getType() == "fragile";});

    foreach ($output as $car){
//        print_r($car);
        foreach ($car->getTires() as $tire){
            if($tire->getPressure() < 1){
                echo $car->getModel();
                break;
            }
        }
    }
} elseif ($command == "flamable"){
    $output = array_filter($cars, function (RawCar $car){ return $car->getCargo()->getType() == "flamable";});
    $output = array_filter($output, function (RawCar $car){
        return $car->getEngine()->getPower() > 250;
    });

    foreach ($output as $car){
        echo $car->getModel() . PHP_EOL;
    }
    // cargo type flamable AND engine power more than 250
}
//print_r($cars);

?>