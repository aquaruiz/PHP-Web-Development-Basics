<?php


namespace Entites\Projectiles;


use Entites\Ships\ShipInterface;

class Laser extends ProjectileAbstract
{
    public function attack(ShipInterface $ship)
    {
        $damage = $this->damage;
        $this->damage = max(0, $this->damage - $ship->getShields());
        $ship->attackResponse($this);
        $ship->setShields($ship->getShields() - $damage);
    }

    public function getAttack(): int
    {
        return $this->damage;
    }
}