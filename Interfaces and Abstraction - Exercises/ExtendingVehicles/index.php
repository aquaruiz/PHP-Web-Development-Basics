<?php
spl_autoload_register();
$vehicles = [];

[$vehicle, $fuelQnty, $liters, $tankCapacity] = explode(" ", readline());
$vehicle1 = new $vehicle($fuelQnty, $liters, $tankCapacity);
$name = $vehicle1->getClassName();
$vehicles[$name] = $vehicle1;

[$vehicle, $fuelQnty, $liters, $tankCapacity] = explode(" ", readline());
$vehicle2 = new $vehicle($fuelQnty, $liters, $tankCapacity);
$name = $vehicle2->getClassName();
$vehicles[$name] = $vehicle2;

[$vehicle, $fuelQnty, $liters, $tankCapacity] = explode(" ", readline());
$vehicle3 = new $vehicle($fuelQnty, $liters, $tankCapacity);
$name = $vehicle3->getClassName();
$vehicles[$name] = $vehicle3;

$n = intval(readline());

for ($i=0; $i < $n; $i++) { 
	[$command, $vehicle, $value] = explode(" ", readline());
	$vehicles[$vehicle]->$command($value);
}

foreach ($vehicles as $key => $value) {
	echo $value;
}
?>