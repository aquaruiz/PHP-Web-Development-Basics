<?php
$qnty = intval(readline());
$step = intval(readline());

$output = [];
$output[0] = 1;

for($i = 1; $i < $qnty; $i++){
    if($i < $step){
        for($j = 0; $j <= $i; $j++){
            $output[$i] += $output[$i - $j];
        }
    } else {
        for($j = 1; $j <= $step; $j++){
            $output[$i] += $output[$i - $j];
        }
    }
}

echo implode(" ", $output);
?>