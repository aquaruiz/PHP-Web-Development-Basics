<?php


namespace Entites\Projectiles;


use Entites\Ships\ShipInterface;

class ShieldReaver extends ProjectileAbstract
{

    public function attack(ShipInterface $ship)
    {
        $ship->setShields(
            $ship->getShields() - ($this->getAttack() * 2)
        );

        $ship->attackResponse($this);
    }

    public function getAttack(): int
    {
        return $this->damage;
    }
}