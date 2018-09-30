<?php
$input = readline();
$arr = explode(" ", $input);

$occurrences = [];
$arr = array_map("strtolower", $arr);

foreach ($arr as $item){
    if(!array_key_exists($item, $occurrences)){
        $occurrences[$item] = 0;
    }

    $occurrences[$item]++;
}

//$odds = [];

$odds = array_filter($occurrences, function($a) {return $a % 2 == 1;});
//foreach ($occurrences as $key => $val){
//    if($val % 2 == 1){
//        $odds[] = $key;
//    }
//}

echo implode(", ", array_keys($odds));
?>