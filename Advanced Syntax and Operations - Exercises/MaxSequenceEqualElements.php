<?php
$array = explode(" ", readline());

$cur = $array[0];
$counter = 0;
$bestcount = 0;
$bestchr = $array[0];

foreach ($array as $chr){
    if($cur == $chr){
        $counter++;
        if($counter > $bestcount){
            $bestcount = $counter;
            $bestchr = $chr;
        }
    } else{
        $counter = 1;
        $cur = $chr;
    }
}

echo str_repeat($bestchr." ", $bestcount);
?>