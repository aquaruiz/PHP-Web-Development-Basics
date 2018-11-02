<?php


namespace Entites\Projectiles;


use Entites\Ships\ShipInterface;

class PenetrationShell extends ProjectileAbstract
{

    public function attack(ShipInterface $ship)
    {
        $ship->attackResponse($this);
    }

    public function getAttack(): int
    {
        return $this->damage;
    }
}