<?php
$occurrences = [];
$input = explode(" ", readline());

//$input = array_map("floatval", $input);

//print_r($input);
foreach ($input as $item) {
//    print_r($item);
        if (!array_key_exists($item, $occurrences)) {
        $occurrences[$item] = 0;
    }

    $occurrences[$item]++;
}

ksort($occurrences);

foreach ($occurrences as $key => $val) {
    echo "$key -> $val" . PHP_EOL;
}
?>