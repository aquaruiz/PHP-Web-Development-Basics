<?php

class Pokemon
{
    private $name;
    private $type;

    /**
     * Pokemon constructor.
     * @param $name
     * @param $type
     */
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function __toString(): string
    {
        return "{$this->getName()} {$this->getType()}";
    }


}