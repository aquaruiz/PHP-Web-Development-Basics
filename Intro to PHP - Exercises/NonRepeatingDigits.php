<?php
$input = intval(fgets(STDIN));
$end = $input <= 1000 ? $input : 1000;

$output = [];
if ($end < 100) {
    echo "no";
    return;
} else {
    for ($i = 100; $i <= $end; $i++) {
        $firstDigit = intval($i / 100) % 10;
        $middleDigit = intval($i / 10) % 10;
        $lastDigit = $i % 10;

        if($firstDigit != $middleDigit && $middleDigit != $lastDigit && $firstDigit != $lastDigit){
            $output[] = $i;
        }
    }
}

print_r(implode(", ", $output));

?>