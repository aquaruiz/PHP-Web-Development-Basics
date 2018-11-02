<?php


namespace Core\Commands;


class AttackCommand extends CommandAbstract
{

    public function execute(array $args = []): string
    {
        array_shift($args);
        $attackerName = array_shift($args);
        $defenderName = array_shift($args);

        $attacker = $this->galaxy->getShip($attackerName);
        $defender = $this->galaxy->getShip($defenderName);

        if (!$attacker->isAlive() || !$defender->isAlive()) {
            throw new \Exception("Ship is destroyed");
        }

        if ($attacker->getStarSystem() != $defender->getStarSystem()) {
            throw new \Exception("No such ship in star system");
        }

        $attacker->attack($defender);

        $output = "$attackerName attacked $defenderName";

        if (!$defender->isAlive()) {
            $output .= PHP_EOL . "$defenderName has been destroyed";
        }

        return $output;
    }
}