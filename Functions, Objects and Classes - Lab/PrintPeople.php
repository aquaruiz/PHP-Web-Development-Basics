<?php
class Person {
    public $name;
    public $age;
    public $occupation;

    function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }
}

$people = [];
while (($input = readline()) != "END"){
    list($name, $age, $occupation) = explode(" ", $input);
    $people[] = new Person($name, intval($age), $occupation);
}

usort($people, function ($a, $b){ return $a->age - $b->age;});

foreach ($people as $person) {
    echo $person->name . " - age: " . $person->age . ", occupation: " . $person->occupation . PHP_EOL;
}
?>