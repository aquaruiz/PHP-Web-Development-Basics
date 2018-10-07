<?php

class Person
{
    private $name;
    private $age;

    public function __construct(string $name, int $age = -1)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string {
        return $this->name;
    }

    public function __toString()
    {
//        if($this->age > 30){
            return "$this->name - $this->age" . PHP_EOL;
//        }

//        return "";
    }
}