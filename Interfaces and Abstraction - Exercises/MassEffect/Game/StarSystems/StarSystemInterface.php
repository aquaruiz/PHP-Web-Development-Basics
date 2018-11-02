<?php


namespace Game\StarSystems;


use Entites\Ships\ShipInterface;

interface StarSystemInterface
{
    public function addNeighbour($solarSystemName, $fuelNeeded): StarSystemInterface;

    public function getName();

    public function getShip($name): ShipInterface;

    public function addShip(ShipInterface $ship);

    public function travelTo($shipName, StarSystemInterface $starSystem);
}