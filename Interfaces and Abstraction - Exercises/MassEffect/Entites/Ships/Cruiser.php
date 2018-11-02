<?php


namespace Entites\Ships;


use Entites\Projectiles\PenetrationShell;
use Entites\Projectiles\ProjectileInterface;
use Entites\Projectiles\ShieldReaver;
use Game\StarSystems\StarSystemInterface;

class Cruiser extends ShipAbstract
{
    const DEFAULT_HEALTH = 100;
    const DEFAULT_SHIELDS = 100;
    const DEFAULT_ATTACK = 50;
    const DEFAULT_FUEL = 300;

    public function __construct(string $name, StarSystemInterface $starSystem, $enhancements = [])
    {
        parent::__construct(self::DEFAULT_HEALTH,
            self::DEFAULT_SHIELDS,
            self::DEFAULT_ATTACK,
            self::DEFAULT_FUEL,
            $name,
            $starSystem,
            $enhancements
        );
    }

    public function attack(ShipInterface $ship)
    {
        $this->fireProjectile()->attack($ship);
    }

    public function attackResponse(ProjectileInterface $projectile)
    {
        $this->setHealth(
            $this->getHealth() - $projectile->getAttack()
        );
    }

    public function fireProjectile(): ProjectileInterface
    {
        return new PenetrationShell($this->getAttack());
    }
}