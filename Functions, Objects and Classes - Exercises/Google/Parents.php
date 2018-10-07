<?php

class Parents
{
    private $name;
    private $birthday;

    /**
     * Parents constructor.
     * @param $name
     * @param $birthday
     */
    public function __construct($name, $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;
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
    public function getBirthday()
    {
        return $this->birthday;
    }

    public function __toString(): string
    {
        return "{$this->getName()} {$this->getBirthday()}";
    }
}