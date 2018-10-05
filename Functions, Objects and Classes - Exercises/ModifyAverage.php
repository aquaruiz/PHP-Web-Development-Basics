<?php
$input = readline();

$num = str_split($input);
$sumDigits = array_sum($num);

while($sumDigits / count($num) <= 5){
    $input .= "9";

    $num = str_split($input);
    $sumDigits = array_sum($num);
}

echo $input;
?>