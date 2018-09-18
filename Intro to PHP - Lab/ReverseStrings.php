<?php
$input = readline('input?');

while ($input !== 'end'){
    $reverse = strrev($input);
    echo "$input = $reverse" . PHP_EOL;
    $input = readline("Enter:");
}
?>