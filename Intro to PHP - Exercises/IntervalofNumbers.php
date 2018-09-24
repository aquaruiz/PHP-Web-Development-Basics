<?php
$firstNumber = intval(readline());
$secondNumber = intval(readline());

$start = $firstNumber < $secondNumber ? $firstNumber : $secondNumber;
$end = $secondNumber < $firstNumber ? $firstNumber : $secondNumber;

for($i = $start; $i <= $end; $i++){
    echo "$i" . PHP_EOL;
}
?>