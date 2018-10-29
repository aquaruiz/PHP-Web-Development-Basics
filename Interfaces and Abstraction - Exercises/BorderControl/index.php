<?php
spl_autoload_register();
$town = [];

while (($input = readline()) != "End") {
	$nextEntry = explode(" ", $input);
	if (count($nextEntry) == 2) {
		[$model, $id] = $nextEntry;
		$currentRobot = new Robot($model, $id);
		$town[] = $currentRobot;
	} elseif (count($nextEntry) == 3) {
		[$name, $age, $id] = $nextEntry;
		$currentCitizen = new Citizen($name, $age, $id);
		$town[] = $currentCitizen;
	}	
}

$fakeIdClue = readline();

foreach ($town as $member) {
	if ($member->isFakeId($fakeIdClue)) {
		echo $member->getId().PHP_EOL;
	}
}
?>