<?php
$read = readline();

if(strlen($read) == 0){
    return;
}
$input = str_split($read);

$occurences = [];

foreach ($input as $letter) {
    if (!key_exists($letter, $occurences)) {
        $occurences[$letter] = 0;
    }

    $occurences[$letter]++;
}

foreach ($occurences as $key=>$val){
    echo "$key -> $val"  . PHP_EOL;
}
?>