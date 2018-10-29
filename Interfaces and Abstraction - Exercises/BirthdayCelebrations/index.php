<?php
spl_autoload_register();
$town = [];

while (($input = readline()) != "End") {
	$input = explode(" ", $input);
	$objectName = array_shift($input);

	switch ($objectName) {
		case 'Robot':
			[$model, $id] = $input;
			$currentRobot = new Robot($model, $id);
			$town[] = $currentRobot;	
			break;
		case 'Citizen':
			[$name, $age, $id, $birthday] = $input;
			$currentCitizen = new Citizen($name, $age, $id, $birthday);
			$town[] = $currentCitizen;
			break;
		case 'Pet':
			[$name, $birthday] = $input;
			$currentPet = new Pet($name, $birthday);
			$town[] = $currentPet;
			break;
		default:
			echo "Invalid Input";
			break;
	}
}

$searchedYear = readline();
foreach ($town as $member) {
if (method_exists($member, "getBirthYear")) {
	if ($member->getBirthYear() == $searchedYear) {
		echo $member->getBirthday().PHP_EOL;
	}
}
}
?>