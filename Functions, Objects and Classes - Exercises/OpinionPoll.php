<?php
require "Person.php";

$n = intval(readline());
$persons = [];

for($i = 0; $i < $n; $i++){
    list($name, $age) = explode(" ", readline());
    if($age>30){
        $persons[] = new Person($name, $age);
    }
}

usort($persons, function (Person $a, Person $b){return $a->getName() <=> $b->getName();});

foreach ($persons as $person) {
    echo $person;
}
?>