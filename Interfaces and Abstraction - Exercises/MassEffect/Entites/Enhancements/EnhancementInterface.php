<?php


namespace Entites\Enhancements;


use Entites\Ships\ShipInterface;

interface EnhancementInterface
{
    public function giveBonus(ShipInterface $ship);
}