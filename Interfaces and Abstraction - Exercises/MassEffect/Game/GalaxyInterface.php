<?php


namespace Game;


use Entites\Ships\ShipInterface;
use Game\StarSystems\StarSystemInterface;

interface GalaxyInterface
{
    public function getStarSystem($name): StarSystemInterface;

    public function addStarSystem($name, StarSystemInterface $starSystem);

    public function shipExists($name): bool;

    public function addShip(ShipInterface $ship);

    public function getShip($name): ShipInterface;
}