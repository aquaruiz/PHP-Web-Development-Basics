<?php
$input = readline();
$digits = "";
$letters = "";
$others = "";

for($i = 0; $i < strlen($input); $i++){
    if (is_numeric($input[$i])){
        $digits .= $input[$i];
    } else if (ctype_alpha($input[$i])){
        $letters .= $input[$i];
    } else if (!ctype_alnum($input[$i])){
        $others .= $input[$i];
    }
}

echo $digits . PHP_EOL . $letters . PHP_EOL . $others;
?>