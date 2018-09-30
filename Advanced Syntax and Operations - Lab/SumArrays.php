<?php
$arrOne = explode(" ", readline());
$arrTwo = explode(" ", readline());

$arrSum = [];

$arrOneLen = count($arrOne);
$arrTwoLen = count($arrTwo);

for($i = 0; $i < max($arrOneLen, $arrTwoLen); $i++){
    $arrSum [] = $arrOne[$i % $arrOneLen] + $arrTwo[$i % $arrTwoLen];
}

//echo implode(" ", $arrOne) . " + " . PHP_EOL . implode(" ", $arrTwo) . " = " . PHP_EOL . implode(" ", $arrSum);
echo implode(" ", $arrSum);
?>