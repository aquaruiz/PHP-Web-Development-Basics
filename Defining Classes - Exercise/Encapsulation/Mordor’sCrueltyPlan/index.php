<?php
$food_happiness = [
	"cram" => 2,
	"lembas" => 3,
	"apple" => 1,
	"melon" => 1,
	"honeycake" => 5,
	"mushrooms" => -10,
	"default" => -1];

function howHappy($num){
	if ($num <= -5) {
		return "Angry";
	} elseif ($num < 0) {
		return "Sad";
	} elseif ($num <= 15) {
		return "Happy";
	} else {
		return "PHP";
	}
}

$input = strtolower(readline());
$eaten = array_filter(explode(",", $input), "strlen");
$happinessIndex = 0;

foreach ($eaten as $food) {
	if (!array_key_exists($food, $food_happiness)) {
		$happinessIndex += $food_happiness["default"];
	} else {
		$happinessIndex += $food_happiness[$food];
	}
}

echo $happinessIndex . PHP_EOL . howHappy($happinessIndex);
?>