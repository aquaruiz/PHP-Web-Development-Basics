<?php


namespace Game;


use Game\StarSystems\StarSystem;

class Game implements GameInterface
{

    /**
     * @var GalaxyInterface
     */
    private $galaxy;

    public function __construct(GalaxyInterface $galaxy)
    {
        $this->galaxy = $galaxy;
    }

    public function start()
    {
        $this->galaxy->addStarSystem(self::STAR_SYSTEM_ARTEMIS_TAU, new StarSystem(self::STAR_SYSTEM_ARTEMIS_TAU));
        $this->galaxy->addStarSystem(self::STAR_SYSTEM_SERPENT_NEBULA, new StarSystem(self::STAR_SYSTEM_SERPENT_NEBULA));
        $this->galaxy->addStarSystem(self::STAR_SYSTEM_HADES_GAMMA, new StarSystem(self::STAR_SYSTEM_HADES_GAMMA));
        $this->galaxy->addStarSystem(self::STAR_SYSTEM_KEPLER_VERGE, new StarSystem(self::STAR_SYSTEM_KEPLER_VERGE));

        $this->galaxy->getStarSystem(self::STAR_SYSTEM_ARTEMIS_TAU)
            ->addNeighbour(self::STAR_SYSTEM_SERPENT_NEBULA, 50)
            ->addNeighbour(self::STAR_SYSTEM_KEPLER_VERGE, 120);

        $this->galaxy->getStarSystem(self::STAR_SYSTEM_SERPENT_NEBULA)
            ->addNeighbour(self::STAR_SYSTEM_ARTEMIS_TAU, 50)
            ->addNeighbour(self::STAR_SYSTEM_HADES_GAMMA, 360);

        $this->galaxy->getStarSystem(self::STAR_SYSTEM_HADES_GAMMA)
            ->addNeighbour(self::STAR_SYSTEM_SERPENT_NEBULA, 360)
            ->addNeighbour(self::STAR_SYSTEM_KEPLER_VERGE, 145);

        $this->galaxy->getStarSystem(self::STAR_SYSTEM_KEPLER_VERGE)
            ->addNeighbour(self::STAR_SYSTEM_HADES_GAMMA, 145)
            ->addNeighbour(self::STAR_SYSTEM_ARTEMIS_TAU, 120);


        $commandString = trim(fgets(STDIN));

        while ($commandString != "over")
        {
            $tokens = explode(" ", $commandString);
            $cmd = $tokens[0];

            $cmd = preg_replace_callback("/-[a-z]/", function($m) use($cmd) {
                $match = $m[0];
                $char = $match[1];
                $upperChar = strtoupper($char);
                return $upperChar;
            }, $cmd);
            $cmd = ucfirst($cmd);
            $cmd = $cmd . "Command";
            $cmd = "Core\\Commands\\" . $cmd;
            $cmdInstance = new $cmd($this->galaxy);
            try {
                $result = $cmdInstance->execute($tokens);
                echo $result . PHP_EOL;
            } catch (\Exception $e) {
                echo $e->getMessage() . PHP_EOL;
            }

            $commandString = trim(fgets(STDIN));
        }

    }
}