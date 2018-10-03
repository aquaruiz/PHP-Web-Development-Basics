<?php
class Person {
    public $name;
    public $age;

//    function __construct(string $name, int $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
}

$person = new Person();
echo(count(get_object_vars($person)));
$person->name = "Pesho";
$person->age = 12;
print_r($person);
?>