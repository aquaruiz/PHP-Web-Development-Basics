<?php


namespace Game;


interface GameInterface
{
    const STAR_SYSTEM_ARTEMIS_TAU = "Artemis-Tau";
    const STAR_SYSTEM_SERPENT_NEBULA = "Serpent-Nebula";
    const STAR_SYSTEM_HADES_GAMMA = "Hades-Gamma";
    const STAR_SYSTEM_KEPLER_VERGE = "Kepler-Verge";

    public function start();
}