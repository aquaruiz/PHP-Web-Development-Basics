<?php
$phonebook = [];

while(($input = readline()) != "Over"){
    $arr = explode(" : ", $input);
    $name = !ctype_digit($arr[0]) ? trim($arr[0]) : trim($arr[1]);
    $phone = ctype_digit($arr[0]) ? trim($arr[0]) : trim($arr[1]);

    if(!array_key_exists($name, $phonebook)){
        $phonebook[$name] = 0;
    }

    $phonebook[$name] = $phone;
}

ksort($phonebook);

foreach ($phonebook as $name => $phone){
    echo $name . " -> " . $phone . PHP_EOL;
}
?>