<?php
function rotateright($str4e){
    $arr = str_split($str4e);
    $arr = array_reverse($arr);
    return implode("", $arr);
}

$inputarr = explode(" ", readline());
$rotatedarr = array_map("rotateright", $inputarr);

$sum = 0;
foreach ($rotatedarr as $num){
    $sum += $num;
}

echo $sum;
//echo implode(" + ", $rotatedarr) . " = " . $sum;
?>