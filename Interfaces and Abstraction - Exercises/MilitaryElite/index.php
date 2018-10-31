<?php 
spl_autoload_register();

$privates = [];

while (($input = readline(PHP_EOL)) != "End") {
	$input = explode(" ", $input);
	$soldierType = array_shift($input);

	try{
		switch ($soldierType) {
			case 'Private':
				[$id, $firstName, $lastName, $salary] = $input;
				$currentPrivate = new Privat($id, $firstName, $lastName, floatval($salary));
				echo $currentPrivate.PHP_EOL;
				$privates[] = $currentPrivate;
				break;
			case 'LeutenantGeneral':
				$id = array_shift($input);
				$firstName = array_shift($input);
				$lastName = array_shift($input);
				$salary = floatval(array_shift($input));
				$currentLeutenantGeneral = new LeutenantGeneral($id, $firstName, $lastName, $salary);

				$ownPrivatesId = $input;

				if ($ownPrivatesId) {
					foreach ($ownPrivatesId as $id) {
						foreach ($privates as $privat) {
							if ($privat->getId() == $id) {
								$currentLeutenantGeneral->addPrivate($privat);
							}
						}
					}	
				}

				echo $currentLeutenantGeneral;
				break;
			case 'Engineer':
				$id = array_shift($input);
				$firstName = array_shift($input);
				$lastName = array_shift($input);
				$salary = floatval(array_shift($input));
				$corp = array_shift($input);
				$repairs = $input;

				$currentEngineer = new Engineer($id, $firstName, $lastName, $salary, $corp);

				if ($repairs) {
					for ($i=0; $i < count($repairs); $i += 2) { 
						$tool = $repairs[$i];
						$hours = intval($repairs[$i + 1]);
						$currentRepairSet = new Repair($tool, $hours);
						$currentEngineer->addRepair($currentRepairSet);
					}	
				}

				echo $currentEngineer;
				break;
			case 'Commando':
				$id = array_shift($input);
				$firstName = array_shift($input);
				$lastName = array_shift($input);
				$salary = floatval(array_shift($input));
				$corp = array_shift($input);

				$missions = $input;

				$currentCommando = new Commando($id, $firstName, $lastName, $salary, $corp);

				if ($missions) {
					for ($i=0; $i < count($missions); $i += 2) { 
						$missionName = $missions[$i];
						$missionState = $missions[$i + 1];

						if ($missionState == "finished" || $missionState == "inProgress") {
							$currentMission = new Mission($missionName);
							
							if ($missionState == "finished") {
								$currentMission->CompleteMission();
							}

							$currentCommando->addMission($currentMission);
						}
					}
				}

				echo $currentCommando;
				break;
			case 'Spy':
				[$id, $firstName, $lastName, $codeNumber] = $input;
				$currentSpy = new Spy($id, $firstName, $lastName, intval($codeNumber));
				echo $currentSpy;
				break;
			default:
				// echo "Error!";
				break;
		}
	} catch (Exception $e){

	}
}
?>