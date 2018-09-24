<?php
$n = readline();
$nextNumber = 1;
$sum = 1;

$output = "1";
$n--;
while ($n > 0){
    $nextNumber++;
    if ($nextNumber % 2 == 1){
        $n--;
        $sum += $nextNumber;
        $output .= PHP_EOL . "$nextNumber";
    }
}

echo $output . PHP_EOL . "Sum: " . $sum;
?>