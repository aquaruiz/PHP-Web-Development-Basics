<?php

require_once "Pokemon.php";
require_once "Trainer.php";

$trainers = [];

while (strtolower(($input = readline())) != "tournament"){
    list($trainerName, $pokemonName, $pokemonElement, $pokemonHealth) = explode(" ", $input);

    $newPokemon = new Pokemon($pokemonName, $pokemonElement, intval($pokemonHealth));

    $found = false;

    foreach ($trainers as $trainer){
        if($trainer->getName() == $trainerName){
            $trainer->addPokemon($newPokemon);
            $found = true;
        }
    }

    if(!$found){
        $newTrainer = new Trainer($trainerName);
        $newTrainer->addPokemon($newPokemon);
        $trainers[] = $newTrainer;
    }
}

while (strtolower(($input = readline()) != "end"){
    $element = $input;
    foreach ($trainers as $trainer){
        $found = false;

        foreach ($trainer->getPokemons() as $pokemon){
            if($pokemon->getElement() == $element){
                $trainer->addBadge();
                $found = true;
                break;
            }
        }

        if(!$found){
            foreach ($trainer->getPokemons() as $pokemon){
                $pokemon->loseHealth();
            }
        }
    }
}

array_map(function (Trainer $a){
    array_map(function (Pokemon $p){
        if(!$p->isAlive()){
            $p->setHealth();    
        }
    }, $a->getPokemons());
}, $trainers);

//print_r($trainers);

usort(
    $trainers, function (Trainer $a, Trainer $b){
        return $b->getBadges() <=> $a->getBadges();
});

foreach ($trainers as $trainer){
    echo $trainer;
}
?>