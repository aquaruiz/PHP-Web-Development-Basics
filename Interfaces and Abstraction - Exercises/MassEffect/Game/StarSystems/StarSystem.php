<?php


namespace Game\StarSystems;


use Entites\Ships\ShipInterface;

class StarSystem implements StarSystemInterface
{

    private $neighbours = [];

    private $name;

    /**
     * @var ShipInterface[]
     */
    private $ships = [];

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function addNeighbour($solarSystemName, $fuelNeeded): StarSystemInterface
    {
        $this->neighbours[$solarSystemName] = $fuelNeeded;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getShip($name): ShipInterface
    {
        return $this->ships[$name];
    }

    public function addShip(ShipInterface $ship)
    {
        $name = $ship->getName();
        $this->ships[$name] = $ship;
    }

    public function travelTo($shipName, StarSystemInterface $starSystem)
    {
        $ship = $this->ships[$shipName];
        unset($this->ships[$shipName]);
        $fuelNeeded = $this->neighbours[$starSystem->getName()];
        $ship->setFuel(
            $ship->getFuel() - $fuelNeeded
        );
        $ship->jumpTo($starSystem);
        $starSystem->addShip($ship);
    }
}