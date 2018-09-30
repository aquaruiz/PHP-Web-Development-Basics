<?php
$arr = explode(" ", readline());
$size = count($arr);
$foundSome = false;

for($i = 0; $i < $size; $i++){
    for($j = 1; $j < $size; $j++){
        for($k = 0; $k < $size; $k++){
            if($arr[$i] + $arr[$j] == $arr[$k] && $j > $i){
                echo $arr[$i] . " + " . $arr[$j] . " == " . $arr[$k] . PHP_EOL;
                $foundSome = true;
            }
        }
    }
}

if(!$foundSome){
    echo "No";
}
?>