<?php
$biggest = PHP_INT_MIN;
while ($number = intval(fgets(STDIN))){
    $biggest = max($biggest, $number);
}

echo "Max: " . $biggest;
?>