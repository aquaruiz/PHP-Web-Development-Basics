<?php
$input = readline();
list($rowsCols, $method) = explode(", ", $input);

$arr = [];
$counter = 0;
if ($method == "A") {
    for ($i = 0; $i < $rowsCols; $i++) {
        for ($j = 0; $j < $rowsCols; $j++) {
            $arr[$j][$i] = ++$counter;
        }
    }
} else if ($method == "B") {
    for ($j = 0; $j < $rowsCols; $j++) {
        if ($j % 2 == 0) {
            for ($i = 0; $i < $rowsCols; $i++) {
                $arr[$i][$j] = ++$counter;
            }
        } else if ($j % 2 == 1) {
            for ($i = $rowsCols - 1; $i >= 0; $i--) {
                $arr[$i][$j] = ++$counter;
            }
        }
    }
}

foreach ( $arr as $item) {
    echo implode(" ", $item) . PHP_EOL;
}
?>