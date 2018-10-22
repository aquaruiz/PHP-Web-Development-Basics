<?php 
spl_autoload_register();

$input = readline();
list($_, $pizzaName, $numberToppings) = explode(" ", $input);

if ($numberToppings < 1 || $numberToppings > 10) {
			echo ("Number of toppings should be in range [0..10].");
			die();
}

if (empty($pizzaName) || strlen($pizzaName) > 15) {
			echo ("Pizza name should be between 1 and 15 symbols.");
			die();
}

$input = readline();
$input = explode(" ", $input);
$command = array_shift($input);
list($typeFlour, $technique, $weight) = $input;
try {
	$dough = new Dough($typeFlour, $technique, floatval($weight));
	// echo $dough . PHP_EOL;
} catch (Exception $e){
	echo $e->getMessage() . PHP_EOL;
	die();
}

try{
	$pizza = new Pizza($pizzaName, $dough, intval($numberToppings));
	// var_dump($pizza);
} catch (Exception $e){
	echo $e->getMessage() . PHP_EOL;
	die();
}

for ($i=0; $i < $numberToppings; $i++) { 
	$input = readline();
	$input = explode(" ", $input);
	$command = array_shift($input);
	list($type, $weight) = $input;
	try {
		$topping = new Topping($type, floatval($weight));
		// echo $toping . PHP_EOL;
	} catch (Exception $e){
		echo $e->getMessage() . PHP_EOL;
		die();
	}

	$pizza->addTopping($topping);
}

echo $pizza;
?>