<?php
$rows = explode(", ", readline())[0];

$minE = PHP_INT_MAX;
$maxE = PHP_INT_MIN;

$matrix = [];

for($i = 0; $i < $rows; $i++){
    $matrix[] = explode(", ", readline());
}

foreach ($matrix as $row){
    foreach ($row as $item) {
        if(intval($item) > $maxE){
            $maxE = intval($item);
        }

        if(intval($item) < $minE){
            $minE = $item;
        }
    }
}

echo "Min: " . $minE . PHP_EOL . "Max: " . $maxE;
?>