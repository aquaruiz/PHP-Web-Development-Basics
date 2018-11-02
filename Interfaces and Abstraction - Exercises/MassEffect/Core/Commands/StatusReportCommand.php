<?php


namespace Core\Commands;


class StatusReportCommand extends CommandAbstract
{

    public function execute(array $args = []): string
    {
        array_shift($args);
        $shipName = array_shift($args);
        $ship = $this->galaxy->getShip($shipName);

        return $ship . "";
    }
}