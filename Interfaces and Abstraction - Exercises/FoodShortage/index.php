<?php
spl_autoload_register();
$n = intval(readline());
$town = [];

for ($i=0; $i < $n; $i++) { 
	$input = explode(" ", readline());
	if (count($input) == 4) {
		[$name, $age, $id, $birthday] = $input;
		$currentCitizen = new Citizen($name, intval($age), $id, $birthday);
		$town[] = $currentCitizen;		
	} else if(count($input) == 3){
		[$name, $age, $group] = $input;
		try{
			$currentRebel = new Rebel($name, intval($age), $group);
			$town[] = $currentRebel;
		} catch (Exception $e){
			echo $e->getMessage().PHP_EOL;
		}
	}
}

while (($input = readline()) != "End") {
	foreach ($town as $member) {
		if ($member->getName() == $input) {
			$town[$input]->buyFood();
		}
	}
}

$totalFoodPurchased = 0;

foreach ($town as $member) {
	if (method_exists($member, "getFoodAmount")) {
		$totalFoodPurchased += $member->getFoodAmount();
	}
}

echo $totalFoodPurchased;
?>