<?php


namespace Entites\Ships;


use Entites\Projectiles\ProjectileInterface;
use Game\StarSystems\StarSystemInterface;

interface ShipInterface
{
    public function getName(): string;

    public function getAttack(): int;

    public function getShields(): int;

    public function getHealth(): int;

    public function getFuel(): float;

    public function setName($name);

    public function setAttack(int $attack);

    public function setShields(int $shields);

    public function setHealth(int $health);

    public function setFuel(float $fuel);

    public function getStarSystem(): StarSystemInterface;

    public function jumpTo(StarSystemInterface $starSystem);

    public function attack(ShipInterface $ship);

    public function attackResponse(ProjectileInterface $projectile);

    public function fireProjectile(): ProjectileInterface;

    public function isAlive(): bool;

    public function __toString();
}