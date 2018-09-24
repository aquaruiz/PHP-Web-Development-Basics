<?php
$number = intval(readline());

for($i = 1; $i <= 10; $i++){
    $product = $i * $number;
    echo "$number X $i = $product" . PHP_EOL;
}
?>