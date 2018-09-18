<?php
$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));
$numberThree = intval(fgets(STDIN));

$largestNumber = $numberOne;

if($numberTwo > $largestNumber){
    $largestNumber = $numberTwo;
}

if($numberThree > $largestNumber){
    $largestNumber = $numberThree;
}

echo $largestNumber;

//$largestFromOneTwo = max($numberOne, $numberTwo);
//$largest = max($largestFromOneTwo, $numberThree);
//
//echo "Max: " . $largest;
?>