<?php
spl_autoload_register();

$allpeople = readline();
$allproducts = readline();

$people = [];
$products = [];

try{
	if (strstr($allpeople, ";")) {
		foreach (array_filter(explode(";", $allpeople), "strlen") as $item) {
			list($name, $money) = explode("=", $item);
			$person = new Person($name, floatval($money));
			$people[$name] = $person;	
		}
	} else {
		echo 'Name cannot be empty';
        die();
	}

	if (strstr($allproducts, ";")) {
		foreach (array_filter(explode(";", $allproducts), "strlen") as $item) {
			list($name, $cost) = explode("=", $item);
			$product = new Product($name, floatval($cost));
			$products[$name] = $product;
		}
	} else {
		echo 'Name cannot be empty';
        die();
	}
} catch (Exception $e){
	echo $e->getMessage() . PHP_EOL;
	die();
}

while (($input = readline()) != "END") {
	if (strstr($input, " ")) {
		list($personName, $productName) = array_filter(explode(" ", $input), "strlen");
		if (isset($personName) && isset($productName)) {
			if (array_key_exists($personName, $people) && array_key_exists($productName, $products)) {
				$product = $products[$productName];
				$people[$personName]->buyItem($product);
			} else {
				$person = new Person($personName, 0);
				$people[$personName] = $person;	
				$product = $products[$productName];
				$people[$personName]->buyItem($product);
			}
		}
	}
}

foreach ($people as $key => $value) {
	echo $value;
}
?>