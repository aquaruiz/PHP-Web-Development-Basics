<?php
$numone = intval(fgets(STDIN));
$numtwo = intval(fgets(STDIN));
$numthree = intval(fgets(STDIN));

$biggest = $numone;

if($numtwo > $biggest){
    $biggest = $numtwo;
}

if($numthree > $biggest){
    echo "Max: ".$numthree;
} else{
    echo "Max: ".$biggest;
}
?>