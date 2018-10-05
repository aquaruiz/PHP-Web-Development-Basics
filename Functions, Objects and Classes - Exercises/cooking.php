<?php
function f($num){
    return $num / 2;
}

function dice($num){
    return sqrt($num);
}

function spice($num){
    return $num + 1;
}

function bake($num){
    return $num * 3;
}

function fillet($num){
    return 0.8 * $num;
}

$startingPoint = floatval(readline());
$commands = explode(", ", readline());


$newNum = $startingPoint;
for($i = 0; $i < 5; $i++){
    $run = $commands[$i];

    switch ($run) {
        case "chop":
            $newNum = f($newNum);
            break;
        case "dice":
            $newNum = dice($newNum);
            break;
        case "spice":
            $newNum = spice($newNum);
            break;
        case "bake":
            $newNum = bake($newNum);
            break;
        case "fillet":
            $newNum = fillet($newNum);
            break;
    }

    echo $newNum . PHP_EOL;
}
?>
