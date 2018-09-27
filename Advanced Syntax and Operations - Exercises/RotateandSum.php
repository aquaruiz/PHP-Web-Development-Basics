<?php
$arrinput = explode(" ", readline());
$ktimes = intval(readline());
$rotatedarr = $arrinput;
$summedarr = array_fill(0, count($arrinput), 0);

for($i = 0; $i < $ktimes; $i++){
    $lastEl = array_pop($rotatedarr);
    array_unshift($rotatedarr, $lastEl);
//    echo "rotated".($i+1)."[] =";
    for($j = 0; $j < count($rotatedarr); $j++){
        $summedarr[$j] += $rotatedarr[$j];
//        echo " ".$rotatedarr[$j];
    }
    echo PHP_EOL;
}

echo implode(" ", $summedarr);
?>