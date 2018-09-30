<?php
$inputArr = explode(" ", readline());

foreach ($inputArr as $num){

    $abs = abs(floatval($num));
    $isNegative = floatval($num) < 0 ? true : false;
    $roundNum = intval($abs + 0.5);
    echo $num . " => " . ($isNegative ? "-" : "") . $roundNum . PHP_EOL;

    //    echo $num  . " => " .round($num, 0, PHP_ROUND_HALF_UP) . PHP_EOL;
}
?>