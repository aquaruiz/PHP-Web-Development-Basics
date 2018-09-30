<?php
$num = intval(readline());
$arr = [];

for($i = 0; $i < $num; $i++){
    $arr[] = intval(readline());
}

for($i = count($arr); $i >= 0; $i--){
    echo $arr[$i] . " ";
}