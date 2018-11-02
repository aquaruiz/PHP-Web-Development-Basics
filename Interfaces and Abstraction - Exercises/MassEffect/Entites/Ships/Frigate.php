<?php


namespace Entites\Ships;


use Entites\Projectiles\ProjectileInterface;
use Entites\Projectiles\ShieldReaver;
use Game\StarSystems\StarSystemInterface;

class Frigate extends ShipAbstract
{
    const DEFAULT_HEALTH = 60;
    const DEFAULT_SHIELDS = 50;
    const DEFAULT_ATTACK = 30;
    const DEFAULT_FUEL = 220;

    private $firedProjectiles = 0;

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
        $this->firedProjectiles++;
        return new ShieldReaver($this->getAttack());
    }

    public function __toString()
    {
        $output = parent::__toString();
        if (!$this->isAlive()) {
            return $output;
        }

        $output .= "-Projectiles fired: " . $this->firedProjectiles . PHP_EOL;

        return $output;
    }
}