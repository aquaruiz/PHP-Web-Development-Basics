<?php

class Person
{
    private $name;
    private $company;
    private $car;
    private $pokemons;
    private $parents;
    private $children;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->pokemons = [];
        $this->parents = [];
        $this->children = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Car
     */
    public function getCar(): Car
    {
        return $this->car;
    }

    /**
     * @param Car $car
     */
    public function setCar(Car $car): void
    {
        $this->car = $car;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    /**
     * @return array
     */
    public function getPokemons(): array
    {
        return $this->pokemons;
    }

    /**
     * @param Pokemon $pokemon
     */
    public function setPokemons(Pokemon $pokemon): void
    {
        $this->pokemons[] = $pokemon;
    }

    /**
     * @return array
     */
    public function getParents(): array
    {
        return $this->parents;
    }

    /**
     * @param Parents $parents
     */
    public function setParents(Parents $parents): void
    {
        $this->parents[] = $parents;
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param Child $children
     */
    public function setChildren(Child $children): void
    {
        $this->children[] = $children;
    }

    public function __toString(): string
    {
        $pokemonsToStr = implode("\n", $this->getPokemons());
        if (strlen($pokemonsToStr) > 0) {
            $pokemonsToStr = PHP_EOL . $pokemonsToStr;
        }

        $parentsToStr = implode("\n", $this->getParents());

        if (strlen($parentsToStr) > 0) {
            $parentsToStr = PHP_EOL . $parentsToStr;
        }
        $childrenToStr = implode("\n", $this->getChildren());
        if (strlen($childrenToStr) > 0) {
            $childrenToStr = PHP_EOL . $childrenToStr;
        }

        if(isset($this->company)){
            $companytostr =  PHP_EOL .$this->getCompany();
        } else {
            $companytostr =  "";
        }

        if(isset($this->car)){
            $cartostr =  PHP_EOL . $this->getCar();
        } else {
            $cartostr =  "";
        }

        return "{$this->getName()}" . PHP_EOL .
            "Company:{$companytostr}" . PHP_EOL .
            "Car:{$cartostr}" . PHP_EOL .
            "Pokemon:{$pokemonsToStr}" . PHP_EOL .
            "Parents:{$parentsToStr}" . PHP_EOL .
            "Children:{$childrenToStr}";
    }
}