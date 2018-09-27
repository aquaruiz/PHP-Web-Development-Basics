<?php
$input = explode(" ", readline());
$longest = 0;
$startIndex = -1;
for ($i = 0; $i < count($input); $i++) {
    $currentCount = 1;
    $current = $input[$i];
    for ($k = $i + 1; $k < count($input); $k++) {
        if ($input[$k] > $current) {
            $current = $input[$k];
            $currentCount++;
        } else {
            break;
        }
    }
    if ($currentCount > $longest) {
        $longest = $currentCount;
        $startIndex = $i;
    }
}
echo implode(' ', array_slice($input, $startIndex, $longest));
?>