<?php

require_once "Engine.php";
require_once "Car.php";

$n = intval(trim(readline()));
$engines = [];
$cars = [];

// n engines
for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());
    $model = array_shift($input);
    $power = array_shift($input);

    $newEngine = new Engine($model, $power);

    if (count($input) > 0) {
        $item = array_shift($input);
        if (is_numeric($item)) {
            $displacement = $item;
        } else {
            $efficiency = $item;
        }

        unset($item);

        if (isset($displacement)) {
            $newEngine->setDisplacement($displacement);
            unset($displacement);
        }

        if (isset($efficiency)) {
            $newEngine->setEfficiency($efficiency);
            unset($efficiency);
        }

        if (count($input) > 0) {
            $item = array_shift($input);
            if (is_numeric($item)) {
                $displacement = $item;
            } else {
                $efficiency = $item;
            }

            unset($item);

            if (isset($displacement)) {
                $newEngine->setDisplacement($displacement);
                unset($displacement);
            }

            if (isset($efficiency)) {
                $newEngine->setEfficiency($efficiency);
                unset($efficiency);
            }

        }
    }

    $engines[] = $newEngine;
}

$m = intval(readline());

// m cars
for ($i = 0; $i < $m; $i++) {
    $input = explode(" ", trim(readline()));
    $model = array_shift($input);
    $engineName = array_shift($input);

    $carEngines = array_filter($engines, function (Engine $eng) use ($engineName) {
        return $eng->getModel() === $engineName;
    });

    $carEngine = array_shift($carEngines);
    $newCar = new Car($model, $carEngine);

    if (count($input) > 0) {
        $item = array_shift($input);
        if (is_numeric($item)) {
            $weight = $item;
        } else {
            $color = $item;
        }

        unset($item);

        if (isset($weight)) {
            $newCar->setWeight($weight);
            unset($weight);
        }

        if (isset($color)) {
            $newCar->setColor($color);
            unset($color);
        }


        if (count($input) > 0) {
            $item = array_shift($input);
            if (is_numeric($item)) {
                $weight = $item;
            } else {
                $color = $item;
            }

            unset($item);

            if (isset($weight)) {
                $newCar->setWeight($weight);
                unset($weight);
            }

            if (isset($color)) {
                $newCar->setColor($color);
                unset($color);
            }
        }
    }

    $cars[] = $newCar;
}

foreach ($cars as $car){
    echo $car;
}
?>