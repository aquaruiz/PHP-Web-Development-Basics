<?php
$phonebook = [];

while(($input = readline()) != "END"){
    $arr = explode(" ", $input);
    $instruction = $arr[0];

    if($instruction == "A"){
        $name = $arr[1];
        $phone = $arr[2];

        if(!array_key_exists($name, $phonebook)){
            $phonebook[$name] = 0;
        }

        $phonebook[$name] = $phone;
    } else if ($instruction == "ListAll"){
        ksort($phonebook);
        foreach ($phonebook as $name => $phone){
            echo $name . " -> " . $phone . PHP_EOL;
        }
    } else if ($instruction == "S"){
        $name = $arr[1];

        if(array_key_exists($name, $phonebook)){
            echo $name . " -> " . $phonebook[$name] . PHP_EOL;
        } else {
            echo "Contact $name does not exist." . PHP_EOL;
        }
    }
}


?>