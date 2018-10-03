<?php
function isInsideVolume(float $x, float $y, float $z): string {
    if($x >= 10 && $x <= 50
    && $y >= 20 && $y <= 80
    && $z >= 15 && $z <= 50){
        return "inside";
    }

    return "outside";
}

$input = explode(", ", readline());

for($i = 0; $i < count($input); $i +=3){
    $x = $input[$i];
    $y = $input[$i + 1];
    $z = $input[$i + 2];

    echo isInsideVolume($x, $y, $z) . PHP_EOL;
}
?>