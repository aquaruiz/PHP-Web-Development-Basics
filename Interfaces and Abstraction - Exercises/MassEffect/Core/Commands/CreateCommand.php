<?php


namespace Core\Commands;


use Entites\Ships\Cruiser;
use Entites\Ships\Frigate;

class CreateCommand extends CommandAbstract
{

    public function execute(array $args = []): string
    {
        array_shift($args);
        $shipType = array_shift($args);
        $shipFullType = "Entites\\Ships\\" . $shipType;
        $shipName = array_shift($args);

        if ($this->galaxy->shipExists($shipName)) {
            throw new \Exception("Ship with such name already exists");
        }

        $systemName = array_shift($args);
        $enhancements = [];
        foreach ($args as $enhancementName) {
            $fullName = "Entites\\Enhancements\\" . $enhancementName;
            $enhancement = new $fullName();
            $enhancements[] = $enhancement;
        }

        $starSystem = $this->galaxy->getStarSystem($systemName);
        $ship = new $shipFullType($shipName, $starSystem, $enhancements);

        $starSystem->addShip($ship);
        $this->galaxy->addShip($ship);

        return "Created $shipType $shipName";
    }
}