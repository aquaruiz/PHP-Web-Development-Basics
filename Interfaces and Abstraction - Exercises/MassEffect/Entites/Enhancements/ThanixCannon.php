<?php


namespace Entites\Enhancements;


use Entites\Ships\ShipInterface;

class ThanixCannon extends EnhancementAbstract
{
    const BONUS_ATTACK = 50;

    public function giveBonus(ShipInterface $ship)
    {
        $ship->setAttack($ship->getAttack() + self::BONUS_ATTACK);
    }
}