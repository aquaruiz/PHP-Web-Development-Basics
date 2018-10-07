<?php

class Pokemon
{
    private $name;
    private $element;
    private $health;

    /**
     * Pokemon constructor.
     * @param $name
     * @param $element
     * @param $health
     */
    public function __construct($name, $element, $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    /**
     * @return mixed
     */
    public function getElement()
    {
        return $this->element;
    }

    public function loseHealth(int $points = 10): void{
        $this->health -= $points;
    }

    public function isAlive(): bool {
        if($this->health > 0){
            return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $health
     */
    public function setHealth($health = 0): void
    {
        $this->health = $health;
    }


}