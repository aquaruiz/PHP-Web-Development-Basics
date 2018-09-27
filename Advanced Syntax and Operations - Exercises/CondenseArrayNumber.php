<?php
$input = explode(" ", readline());
$output = [];
array_map("intval", $input);

while(count($input) > 1){
    for($i = 0; $i < count($input) - 1; $i++){
        $output[] = $input[$i] + $input[$i + 1];
    }

    $input = $output;
    $output = [];
}

echo $input[0];
?>