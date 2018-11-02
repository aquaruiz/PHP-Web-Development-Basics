<?php


namespace Entites\Projectiles;


abstract class ProjectileAbstract implements ProjectileInterface
{
    protected $damage;

    public function __construct($damage)
    {
        $this->damage = $damage;
    }
}