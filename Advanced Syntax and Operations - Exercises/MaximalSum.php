<?php
list($rows, $cols) = explode(" ", readline());

$matrix = [];

for($i = 0; $i < $rows; $i++){
    $curr = explode(" ", readline());
    $matrix[] = $curr;
}

$maxsum = PHP_INT_MIN;
$startindexrow = 0;
$startindexcol = 0;

for($i = 0; $i < $rows - 2; $i++){
    for($j = 0; $j < $cols - 2; $j++){
        $curr = $matrix[$i][$j] + $matrix[$i + 1][$j] + $matrix[$i + 2][$j]
            + $matrix[$i][$j + 1] + $matrix[$i + 1][$j + 1] + $matrix[$i + 2][$j + 1]
            + $matrix[$i][$j + 2] + $matrix[$i + 1][$j + 2] + $matrix[$i + 2][$j + 2];

        if($curr > $maxsum){
            $maxsum = $curr;
            $startindexrow = $i;
            $startindexcol = $j;
        }
    }
}

echo "Sum = " . $maxsum . PHP_EOL;
echo $matrix[$startindexrow][$startindexcol] . " ". $matrix[$startindexrow][$startindexcol + 1]. " ". $matrix[$startindexrow][$startindexcol + 2] . PHP_EOL;
echo $matrix[$startindexrow + 1][$startindexcol] . " ". $matrix[$startindexrow + 1][$startindexcol + 1]. " ". $matrix[$startindexrow + 1][$startindexcol + 2] . PHP_EOL;
echo $matrix[$startindexrow + 2][$startindexcol] . " ". $matrix[$startindexrow + 2][$startindexcol + 1]. " ". $matrix[$startindexrow + 2][$startindexcol + 2] . PHP_EOL;
?>