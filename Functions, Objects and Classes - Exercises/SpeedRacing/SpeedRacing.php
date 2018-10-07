<?php
$n = intval(readline());

require "Car.php";
$cars = [];

for($i = 0; $i < $n; $i++){
    list($model, $fuelAmount, $fuelCostForKilometer) = explode(" ", readline());
    $currentCar = new Car($model, $fuelAmount, $fuelCostForKilometer);
    $cars[$model] = $currentCar;
}

while(($input = readline()) != "End"){
    list($instruction, $carModel, $driveDistance) = explode(" ", $input);
    $result = $cars[$carModel]->driveCar($driveDistance);

    if(!$result){
        echo "Insufficient fuel for the drive" . PHP_EOL;
    }
}

foreach ($cars as $car){
    echo $car;
}
?>