<?php 
spl_autoload_register();
while (($input = readline()) != "End") {
$fLine = explode(" ", $input);
$type = array_shift($fLine);
if ($type == "Cat") {
	[$animalName, $animalWeight, $livingRegion, $breed] = $fLine;
	$animal = new Cat($animalName, $type, floatval($animalWeight), $livingRegion, $breed);
} else {
	[$animalName, $animalWeight, $livingRegion] = $fLine;
	$animal = new $type($animalName, $type, floatval($animalWeight), $livingRegion);
}
$animal->makeSound();

[$foodType, $foodQnty] = explode(" ", readline());
$food = new $foodType(intval($foodQnty));

$animal->eat($food);
echo $animal;
}
 ?>