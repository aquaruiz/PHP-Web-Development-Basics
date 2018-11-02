<?php


namespace Core\Commands;


use Game\GalaxyInterface;

abstract class CommandAbstract implements Executable
{
    protected $galaxy;

    public function __construct(GalaxyInterface $galaxy)
    {
        $this->galaxy = $galaxy;
    }


}