<?php


namespace Core\Commands;


class PlotJumpCommand extends CommandAbstract
{

    public function execute(array $args = []): string
    {
        array_shift($args);
        $shipName = array_shift($args);
        $starSystemName = array_shift($args);

        $starSystem = $this->galaxy->getStarSystem($starSystemName);
        $ship = $this->galaxy->getShip($shipName);

        if (!$ship->isAlive()) {
            throw new \Exception('Ship is destroyed');
        }

        if ($ship->getStarSystem() == $starSystem) {
            throw new \Exception("Ship is already in $starSystemName");
        }

        $oldSystem = $ship->getStarSystem();

        $oldSystem->travelTo($shipName, $starSystem);

        return "$shipName jumped from {$oldSystem->getName()} to $starSystemName";
    }
}