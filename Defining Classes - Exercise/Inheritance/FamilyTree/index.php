<?php
spl_autoload_register();
$personOfInterest = readline();
$type = "name";

if (strpos($personOfInterest, "/")) {
	$type = "birthday";
}

$people = [];
$inputs = [];
while (($input = readline()) != "End") {
	$inputs[] = $input;
}


foreach ($inputs as $input) {
	if (!strrpos($input, "-")) {
		list($firstName, $lastName, $birthday) = array_filter(explode(" ", $input), "strlen");
		$nextPerson = new Person($firstName, $lastName, $birthday);
		$people[] = $nextPerson;
	}
}

foreach ($inputs as $input) {
	if (!strpos($input, "/") && strrpos($input, "-")) {
		list($firstPerson, $secondPerson) = array_filter(explode(" - ", $input), "strlen");
		list($firstName1, $lastName1) = array_filter(explode(" ", $firstPerson), "strlen");
		list($firstName2, $lastName2) = array_filter(explode(" ", $secondPerson), "strlen");

		foreach ($people as $key1 => $value1) {
			if ($value1->getFullName() == $firstName1 . " " . $lastName2) {
				foreach ($people as $key2 => $value2) {
					if ($value2->getFullName() == $firstName2 . " " . $lastName2) {
						$value1->setChild($value2);
						$value2->setParent($value1);
					}
				}
			}
		}
	} else if ((strpos($input, "/") == 2)  && strrpos($input, "-")) {
		if (strrpos($input, '/', 9)) {
			list($firstBirthday, $secondBirthday) = explode(" - ", $input);

			foreach ($people as $key1 => $value1) {
				if ($value1->getBirthday() == $firstBirthday) {
					foreach ($people as $key2 => $value2) {
						if ($value2->getBirthday() == $secondBirthday) {
							$value1->setChild($value2);
							$value2->setParent($value1);
						}
					}
				} 
			}
		} elseif ((!strrpos($input, '/', 9))  && strrpos($input, "-")) {
			list($birthday, $secondFullName) = explode(" - ", $input);

			foreach ($people as $key1 => $value1) {
				if ($value1->getBirthday() == $birthday) {
					foreach ($people as $key2 => $value2) {
						if ($value2->getFullName() == $secondFullName) {
							$value1->setChild($value2);
							$value2->setParent($value1);
						}
					}
				}
			}
		}
	} elseif ((strpos($input, "/") > (strlen($input) - 11))  && strrpos($input, "-")){
		list($firstFullname1, $birthday2) = explode(" - ", $input);

		foreach ($people as $key1 => $value1) {
			if ($value1->getFullName() == $firstFullname1) {
				foreach ($people as $key2 => $value2) {
					if ($value2->getBirthday() == $birthday2) {
						$value1->setChild($value2);
						$value2->setParent($value1);
					}
				}
			}
		}
	}
}

$trueOrder = [];

foreach ($inputs as $input) {
	if (strpos($input, " - ")) {
		list($first, $second) = explode(" - ", $input);
		if (strpos($first, "/")) {
			foreach ($people as $key => $value) {
				if($value->getBirthday() == $first){
					if(!in_array($value->getFullName(), $trueOrder)){
						$trueOrder[] = $value->getFullName();
					}
				}
			}
		} else {
			if (!in_array($first, $trueOrder)) {
				$trueOrder[] = $first;
			}
		}

		if (strpos($second, "/")) {
			foreach ($people as $key => $value) {
				if($value->getBirthday() == $second){
					if (!in_array($value->getFullName(), $trueOrder)) {
						$trueOrder[] = $value->getFullName();
					}
				}
			}
		} else {
			if (!in_array($second, $trueOrder)) {
				$trueOrder[] = $second;
			}
		}
	} else {
		list($firstName, $lastName, $_) = explode(" ", $input);
		if (!in_array(($firstName . " " . $lastName), $trueOrder)) {
			$trueOrder[] = $firstName . " " . $lastName;
		}
	}
}

if ($type == "name") {
	foreach ($people as $key => $value) {
		if ($value->getFullName() == $personOfInterest) {
			echo $value->getFullName() . " " . $value->getBirthday() . PHP_EOL;
			
			echo "Parents:" . PHP_EOL;

			foreach ($trueOrder as $fullName) {
				foreach ($value->getParent() as $k => $v) {
					if ($fullName == $v->getFullName()) {
						echo $v->getFullName() . " " . $v->getBirthday() . PHP_EOL;
					}
				}
			}

			echo "Children:" . PHP_EOL;

			foreach ($trueOrder as $fullName) {
				foreach ($value->getChildren() as $k => $v) {
					if ($fullName == $v->getFullName()) {
						echo $v->getFullName() . " " . $v->getBirthday() . PHP_EOL;
					}				
				}
			}
			
		}
	}
} else {
	foreach ($people as $key => $value) {
		if ($value->getBirthday() == $personOfInterest) {
			echo $value->getFullName() . " " . $value->getBirthday() . PHP_EOL;
			echo "Parents:" . PHP_EOL;

			foreach ($trueOrder as $fullName) {
				foreach ($value->getParent() as $k => $v) {
					if ($fullName == $v->getFullName()) {
						echo $v->getFullName() . " " . $v->getBirthday() . PHP_EOL;
					}
				}
			}

			echo "Children:" . PHP_EOL;

			foreach ($trueOrder as $fullName) {
				foreach ($value->getChildren() as $k => $v) {
					if ($fullName == $v->getFullName()) {
						echo $v->getFullName() . " " . $v->getBirthday() . PHP_EOL;
					}				
				}
			}
		}
	}
}
?>