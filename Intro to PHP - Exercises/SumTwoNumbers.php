<?php
$firstNumber = floatval(readline());
$secondNumber = floatval(readline());
$sum = number_format($firstNumber + $secondNumber, 2, ",", "");
echo '$firstNumber + $secondNumber = ';
echo "$firstNumber + $secondNumber = {$sum}";
?>