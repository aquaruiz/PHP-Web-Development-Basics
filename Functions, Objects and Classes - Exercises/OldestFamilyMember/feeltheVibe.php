<?php

require_once "Person.php";
require_once "Family.php";

$family = new Family();
$n = intval(readline());
for($i = 0; $i < $n; $i++){
    list($name, $age) = explode(" ", readline());
    $newPerson = new Person($name, $age);
    $family->addMember($newPerson);
}

echo $family->getOldestMember();
