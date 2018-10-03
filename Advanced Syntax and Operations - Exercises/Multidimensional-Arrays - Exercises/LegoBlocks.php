<?php
$rows = intval(readline());
$firstArr = [];
$secondArr = [];

for($i = 0; $i < $rows; $i++){
    $firstArr[$i] = array_map('intval', explode(" ", readline()));
}

for($i = 0; $i < $rows; $i++){
    $secondArr[$i] = array_map('intval', explode(" ", readline()));
}

//find max row width first array
$maxwidth = 0;
for($i = 0; $i < $rows; $i++){
    if($maxwidth < count($firstArr[$i])){
        $maxwidth = count($firstArr[$i]);
    }
}

$mixedArr = $firstArr;

for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < count($secondArr[$i]); $j++){
        $mixedArr[$i][$maxwidth + 1 + $j] = $secondArr[$i][$j];
    }
}

// compare row widths - starting with first row
$rowwidth = array_keys($mixedArr[0])[count(array_keys($mixedArr[0])) - 1];
$legofits = true;
for($i = 1; $i < $rows; $i++){
    $nrowwidth = array_keys($mixedArr[$i])[count(array_keys($mixedArr[$i])) - 1];
    if($nrowwidth != $rowwidth){
        $legofits = false;
        break;
    }
}

if($legofits){
    for($i = 0; $i < count($mixedArr); $i++){
        echo "[" . implode(", ", $mixedArr[$i]) . "]" . PHP_EOL;
    }
    return;
}

// flip and add again
$mixedArr2 = $firstArr;

for($i = 0; $i < $rows; $i++){
    for($j = count($secondArr[$i]) - 1; $j >= 0; $j--){
        $mixedArr2[$i][] = $secondArr[$i][$j];
    }
}


// compare row widths - starting with first row
$rowwidth = array_keys($mixedArr2[0])[count(array_keys($mixedArr2[0])) - 1];
$legofits = true;
for($i = 1; $i < $rows; $i++){
    $nrowwidth = array_keys($mixedArr2[$i])[count(array_keys($mixedArr2[$i])) - 1];
    if($nrowwidth != $rowwidth){
        $legofits = false;
        break;
    }
}


if($legofits){
    for($i = 0; $i < count($mixedArr2); $i++){
        echo "[" . implode(", ", $mixedArr2[$i]) . "]" . PHP_EOL;
    }
    return;
}

// count sells
$count = 0;
for($i = 0; $i < count($mixedArr2); $i++){
    $count += count($mixedArr2[$i]);
}
echo "The total number of cells is: " . $count;
?>