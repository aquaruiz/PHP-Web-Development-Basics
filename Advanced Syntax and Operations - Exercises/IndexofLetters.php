<?php
$alpha = [];

for($i = 0; $i <= 25; $i++){
    $alpha[] = chr($i + 97);
}

$input = str_split(strtolower(readline()));
foreach ($input as $letter){
    echo "$letter -> ";
    echo array_search($letter, $alpha) . PHP_EOL;
}
?>