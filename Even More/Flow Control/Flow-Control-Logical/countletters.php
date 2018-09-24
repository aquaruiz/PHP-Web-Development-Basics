<?php
$letters = trim(fgets(STDIN));
$letapp = [];

for ($i = 0; $i < strlen($letters); $i++) {
    $letter = $letters[$i];
    if (!array_key_exists($letter, $letapp)) {
        $letapp[$letter] = 0;
    }

    $letapp[$letter]++;
}

foreach ($letapp as $key => $value) {
    echo $key . " -> " . $value . PHP_EOL;
}
?>