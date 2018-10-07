<?php

class Child
{
    private $name;
    private $birthday;

    /**
     * Child constructor.
     * @param $name
     * @param $birthday
     */
    public function __construct($name, $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;
    }

    public function __toString(): string
    {
        return "{$this->name} {$this->birthday}";
    }


}