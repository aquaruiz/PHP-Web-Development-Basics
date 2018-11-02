<?php


namespace Entites\Enhancements;


use Entites\Ships\ShipInterface;

class ExtendedFuelCells extends EnhancementAbstract
{
    const BONUS_FUEL = 200;

    public function giveBonus(ShipInterface $ship)
    {
        $ship->setFuel($ship->getFuel() + self::BONUS_FUEL);
    }
}