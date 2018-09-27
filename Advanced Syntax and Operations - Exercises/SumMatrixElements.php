<?php
list($rows, $cols) = explode(", ", readline());

$matrix = [];

for($i = 0; $i < $rows; $i++){
    $curr = explode(", ", readline());
    $matrix[] = $curr;
}

echo $rows . PHP_EOL . $cols . PHP_EOL;

$sum = 0;

foreach ($matrix as $r){
    foreach ($r as $c){
        $sum += intval($c);
    }
}

echo $sum;
?>