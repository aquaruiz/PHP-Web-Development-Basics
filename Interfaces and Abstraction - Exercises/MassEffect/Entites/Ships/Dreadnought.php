<?php


namespace Entites\Ships;


use Entites\Projectiles\Laser;
use Entites\Projectiles\PenetrationShell;
use Entites\Projectiles\ProjectileInterface;
use Entites\Projectiles\ShieldReaver;
use Game\StarSystems\StarSystemInterface;

class Dreadnought extends ShipAbstract
{
    const DEFAULT_HEALTH = 200;
    const DEFAULT_SHIELDS = 300;
    const DEFAULT_ATTACK = 150;
    const DEFAULT_FUEL = 700;

    const RESPOND_ATTACK_SHIELDS_BONUS = 50;

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
        $this->setShields($this->getShields() + self::RESPOND_ATTACK_SHIELDS_BONUS);
        $this->setHealth(
            $this->getHealth() - $projectile->getAttack()
        );
        $this->setShields($this->getShields() - self::RESPOND_ATTACK_SHIELDS_BONUS);
    }

    public function fireProjectile(): ProjectileInterface
    {
        return new Laser(
            intval($this->getShields() / 2) + $this->getAttack()
        );
    }
}