<?php
$read = readline();
$input = explode(", ", $read);

$elements = [];

foreach ($input as $item){
    if(!key_exists($item, $elements)){
        $elements[$item] = 0;
    }

    $elements[$item]++;
}

$elements = array_filter($elements, function ($a){return $a == 1;});

echo implode(" ", array_keys($elements));
?>