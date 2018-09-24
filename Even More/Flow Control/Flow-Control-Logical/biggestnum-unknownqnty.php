<?php
$biggest = 0;
while ($number = intval(fgets(STDIN))){
    $biggest = max($biggest, $number);
}

echo "Max: " . $biggest;
?>