<?php
namespace Game;

use Entites\Ships\ShipInterface;
use Game\StarSystems\StarSystemInterface;

class Galaxy implements GalaxyInterface
{
    /**
     * @var StarSystemInterface[]
     */
    private $starSystems = [];

    /**
     * @var ShipInterface[]
     */
    private $ships = [];

    public function getStarSystem($name): StarSystemInterface
    {
        return $this->starSystems[$name];
    }

    public function addStarSystem($name, StarSystemInterface $starSystem)
    {
        $this->starSystems[$name] = $starSystem;
    }

    public function shipExists($name): bool
    {
        return array_key_exists($name, $this->ships);
    }

    public function addShip(ShipInterface $ship)
    {
        $this->ships[$ship->getName()] = $ship;
    }

    public function getShip($name): ShipInterface
    {
        return $this->ships[$name];
    }
}