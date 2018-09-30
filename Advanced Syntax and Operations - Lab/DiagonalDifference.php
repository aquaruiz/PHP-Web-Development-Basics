<?php
$rows = intval(readline());
$matrix = [];

for($i = 0; $i < $rows; $i++){
    $matrix[] = explode(" ", readline());
}

array_map("intval", $matrix);

$rightDiaSum = $matrix[0][0];
$leftDiaSum = $matrix[0][count($matrix) - 1];

//echo "Primary diagonal: sum = " . $matrix[0][0];
for($i = 1; $i < $rows; $i++){
    for($j = 1; $j < $rows; $j++){
        if($j == $i){
            $rightDiaSum += $matrix[$i][$j];
//            echo " + " . ($matrix[$i][$j] < 0 ? "(" . $matrix[$i][$j] . ")": $matrix[$i][$j]);
        }
    }
}

//echo " = " . $rightDiaSum . PHP_EOL;

//echo "Secondary diagonal: sum = " . $matrix[0][$rows - 1];
for($i = 1; $i < $rows; $i++){
    for($j = $rows - 2; $j >= 0; $j--){
        if($rows - 1 - $j == $i ){
            $leftDiaSum += $matrix[$i][$j];
//            echo " + " . $matrix[$i][$j];;
        }
    }
}

//echo " = " . $leftDiaSum . PHP_EOL;

$diff = abs($leftDiaSum - $rightDiaSum);
//echo "Difference: |$rightDiaSum - $leftDiaSum| = ". $diff;
echo $diff;
?>