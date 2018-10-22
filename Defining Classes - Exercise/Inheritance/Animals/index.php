<?php
spl_autoload_register();

while (($input = readline()) != "Beast!") {
	$type = $input;

	try{
		switch ($type) {
			case 'Cat':
				list($name, $age, $gender) = explode(" ", readline());
				$animal = new Cat($name, intval($age), $gender);
				break;
			case 'Frog':
				list($name, $age, $gender) = explode(" ", readline());
				$animal = new Frog($name, intval($age), $gender);
				break;
			case 'Dog':
				list($name, $age, $gender) = explode(" ", readline());
				$animal = new Dog($name, intval($age), $gender);
				break;
			case 'Kitten':
				list($name, $age, $a) = explode(" ", readline());
				$animal = new Kitten($name, intval($age));
				break;
			case 'Tomcat':
				list($name, $age, $a) = explode(" ", readline());
				$animal = new Tomcat($name, intval($age));
				break;
			default:
				throw new Exception("Invalid input!");
				break;
		}

		echo $animal.PHP_EOL;
		echo $animal->produceSound().PHP_EOL;
	} catch (Exception $e){
		echo $e->getMessage();
		return;
	}
}
?>