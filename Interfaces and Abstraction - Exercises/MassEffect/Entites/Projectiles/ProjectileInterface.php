<?php


namespace Entites\Projectiles;


use Entites\Ships\ShipInterface;

interface ProjectileInterface
{
    public function attack(ShipInterface $ship);

    public function getAttack(): int;
}