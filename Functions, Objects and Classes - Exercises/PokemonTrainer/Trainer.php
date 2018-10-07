<?php

class Trainer
{
    private $name;
    private $badges;
    private $pokemons;

    /**
     * Trainer constructor.
     * @param $name
     * @param $badges
     * @param $pokemons
     */
    public function __construct($name, $badges = 0)
    {
        $this->name = $name;
        $this->badges = $badges;
        $this->pokemons = [];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getBadges(): int
    {
        return $this->badges;
    }

    public function addPokemon(Pokemon $pokemon):void{
        $this->pokemons[] = $pokemon;
    }

    /**
     * @return array
     */
    public function getPokemons(): array
    {
        return $this->pokemons;
    }

    public function addBadge(): void{
        $this->badges++;
    }

    public function __toString() : string
    {
        $numPokemons = count(array_filter($this->getPokemons(), function (Pokemon $a) { return 
            $a->isAlive();
        }));
        return "{$this->getName()} {$this->getBadges()} {$numPokemons}". PHP_EOL;
    }


}