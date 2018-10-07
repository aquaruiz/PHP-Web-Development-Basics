<?php
require_once "Car.php";
require_once "Pokemon.php";
require_once "Company.php";
require_once "Parents.php";
require_once "Child.php";
require_once "Person.php";

$people = [];

while (($input = readline()) != "End"){
    $input = explode(" ", $input);
    $personName = array_shift($input);
    $command = array_shift($input);

    switch ($command){
        case "company":
            list($companyName, $department, $salary) = $input;
            $newCompany = new Company($companyName, $department, floatval($salary));

            if(!array_key_exists($personName, $people)){
                $newPerson = new Person($personName);
                $newPerson->setCompany($newCompany);
                $people[$personName] = $newPerson;
            } else {
                $people[$personName]->setCompany($newCompany);
            }
            break;
        case "pokemon":
            list($pokemonName, $pokemonType) = $input;
            $newPokemon = new Pokemon($pokemonName, $pokemonType);
            if(!array_key_exists($personName, $people)){
                $newPerson = new Person($personName);
                $newPerson->setPokemons($newPokemon);
                $people[$personName] = $newPerson;
            } else {
                $people[$personName]->setPokemons($newPokemon);
            }
            break;
        case "parents":
            list($parentName, $parentBirthday) = $input;
            $newParent = new Parents($parentName, $parentBirthday);
            if (!array_key_exists($personName, $people)){
                $newPerson = new Person($personName);
                $newPerson->setParents($newParent);
                $people[$personName] = $newPerson;
            } else {
                $people[$personName]->setParents($newParent);
            }
            break;
        case "children":
            list($childName, $childBirthday) = $input;
            $newChild = new Child($childName, $childBirthday);
            if(!array_key_exists($personName, $people)){
                $newPerson = new Person($personName);
                $newPerson->setChildren($newChild);
                $people[$personName] = $newPerson;
            } else {
                $people[$personName]->setChildren($newChild);
            }
            break;
        case "car":
            list($carModel, $carSpeed) = $input;
            $newCar = new Car($carModel, $carSpeed);

            if(!array_key_exists($personName, $people)){
                $newPerson = new Person($personName);
                $newPerson->setCar($newCar);
                $people[$personName] = $newPerson;
            } else {
                $people[$personName]->setCar($newCar);
            }

            break;
    }
}

$searchForIt = readline();
echo $people[$searchForIt];
?>