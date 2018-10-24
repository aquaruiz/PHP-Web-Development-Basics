<?php
spl_autoload_register();

$carInput = readline();
[$type, $fuelQnty, $liters] = explode(" ", $carInput);
$car = new $type($fuelQnty, $liters);

$truckInput = readline();
[$type, $fuelQnty, $liters] = explode(" ", $truckInput);
$truck = new $type($fuelQnty, $liters);

$n = intval(readline());

for ($i=0; $i < $n; $i++) { 
	[$command, $type, $value] = explode(" ", readline());
	switch ($type) {
		case 'Car':
			$car->$command($value);
			break;
		case 'Truck':
			$truck->$command($value);
			break;
		default:
			echo "Error!";
			continue;
	}
}

echo $car . $truck;
?>