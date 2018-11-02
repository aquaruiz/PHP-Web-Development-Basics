<?php


namespace Entites\Ships;


use Entites\Enhancements\EnhancementInterface;
use Game\StarSystems\StarSystemInterface;

abstract class ShipAbstract implements ShipInterface
{
    protected $name;

    protected $attack;

    protected $health;

    protected $shields;

    protected $fuel;

    protected $starSystem;

    protected $enhancements;

    /**
     * ShipAbstract constructor.
     * @param int $health
     * @param int $shields
     * @param int $attack
     * @param float $fuel
     * @param string $name
     * @param StarSystemInterface $starSystem
     * @param EnhancementInterface[] $enhancements
     */
    public function __construct(
        int $health,
        int $shields,
        int $attack,
        float $fuel,
        string $name,
        StarSystemInterface $starSystem,
        $enhancements = []
    ) {
        $this->setHealth($health);
        $this->setShields($shields);
        $this->setAttack($attack);
        $this->setFuel($fuel);
        $this->setName($name);
        $this->jumpTo($starSystem);
        $this->addEnhancements($enhancements);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function setAttack(int $attack)
    {
        $this->attack = max(0, $attack);
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health)
    {
        $this->health = max(0, $health);
    }

    public function getShields(): int
    {
        return $this->shields;
    }

    public function setShields(int $shields)
    {
        $this->shields = max(0, $shields);
    }

    public function getFuel(): float
    {
        return $this->fuel;
    }


    public function setFuel(float $fuel)
    {
        $this->fuel = max(0, $fuel);
    }

    public function getStarSystem(): StarSystemInterface
    {
        return $this->starSystem;
    }

    public function jumpTo(StarSystemInterface $starSystem)
    {
        $this->starSystem = $starSystem;
    }

    public function isAlive(): bool
    {
        return $this->getHealth() > 0;
    }

    /**
     * @param EnhancementInterface[] $enhancements
     */
    public function addEnhancements(array $enhancements = [])
    {
        foreach ($enhancements as $enhancement) {
            $enhancement->giveBonus($this);
            $this->enhancements[] = $enhancement;
        }
    }

    public function __toString()
    {
        $output = "";
        $output .= "--" . $this->getName() . ' - ' . basename(get_class($this)) . PHP_EOL;

        if (!$this->isAlive()) {
            $output .= "(Destroyed)";
            return $output;
        }

        $output .= "-Location: " . $this->getStarSystem()->getName() . PHP_EOL;
        $output .= "-Health: " . $this->getHealth() . PHP_EOL;
        $output .= "-Shields: " . $this->getShields() . PHP_EOL;
        $output .= "-Damage: " . $this->getAttack() . PHP_EOL;
        $output .= "-Fuel: " . number_format($this->getFuel(), 1) . PHP_EOL;
        $output .= "-Enhancements: ";
        if (count($this->enhancements) == 0) {
            $output .= "N/A" . PHP_EOL;
        } else {
            $output .= implode(" ", $this->enhancements) . PHP_EOL;
        }

        return $output;
    }
}