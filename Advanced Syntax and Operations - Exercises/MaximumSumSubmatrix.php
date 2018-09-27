<?php
list($rows, $cols) = explode(", ", readline());

$matrix = [];

for($i = 0; $i < $rows; $i++){
    $curr = explode(", ", readline());
    $matrix[] = $curr;
}

$maxsum = PHP_INT_MIN;
$startindexrow = 0;
$startindexcol = 0;

for($i = 0; $i < $rows - 1; $i++){
    for($j = 0; $j < $cols - 1; $j++){
        $curr = $matrix[$i][$j] + $matrix[$i + 1][$j] + $matrix[$i][$j + 1] + $matrix[$i + 1][$j + 1];
        if($curr > $maxsum){
            $maxsum = $curr;
            $startindexrow = $i;
            $startindexcol = $j;
        }
    }
}

echo $matrix[$startindexrow][$startindexcol] . " ". $matrix[$startindexrow][$startindexcol + 1] . PHP_EOL;
echo $matrix[$startindexrow + 1][$startindexcol] . " ". $matrix[$startindexrow + 1][$startindexcol + 1] . PHP_EOL;
echo $maxsum;
?>