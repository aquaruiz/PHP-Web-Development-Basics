<?php


namespace Entites\Enhancements;


use Entites\Ships\ShipInterface;

class KineticBarrier extends EnhancementAbstract
{
    const BONUS_SHIELDS = 100;

    public function giveBonus(ShipInterface $ship)
    {
        $ship->setShields($ship->getShields() + self::BONUS_SHIELDS);
    }
}