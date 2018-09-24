<?php
$number = (int)readline();
$multiplier = intval(readline());

if($multiplier > 10){
    $product = $multiplier * $number;
    echo "$number X $multiplier = $product" . PHP_EOL;
    return;
}

for($i = $multiplier; $i <= 10; $i++){
    $product = $i * $number;
    echo "$number X $i = $product" . PHP_EOL;
}
?>