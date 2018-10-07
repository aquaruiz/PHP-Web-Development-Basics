<?php
function cut($x)
{
    return floatval($x) / 4;
}

function lap($x)
{
    return 0.8 * $x;
}

function grind($x)
{
    return $x - 20;
}

function etch($x)
{
    return $x - 2;
}

function xray($x)
{
    return $x + 1;
}

function wash($x)
{
    return (int)$x;
}

$input = array_map("floatval", explode(", ", readline()));
$targetedThickness = array_shift($input);

for ($i = 0; $i < count($input); $i++) {
    $thickness = $input[$i];
    echo "Processing chunk $thickness microns" . PHP_EOL;

    list($cuts, $laps, $grinds, $etches, $xrays) = array_fill(0, 5, 0);
    $previousOperation = "";
    $currentOperation = "";

    while ($thickness != $targetedThickness && $thickness != $targetedThickness - 1) {
        if (cut($thickness) < $thickness && cut($thickness) >= $targetedThickness - 1) {
            $cuts++;
            $currentOperation = 'cut';
            $thickness = cut($thickness);
        } elseif (lap($thickness) < $thickness && lap($thickness) >= $targetedThickness - 1) {
            $laps++;
            $currentOperation = 'lap';
            $thickness = lap($thickness);
        } elseif (grind($thickness) < $thickness && grind($thickness) >= $targetedThickness - 1) {
            $grinds++;
            $currentOperation = 'grind';
            $thickness = grind($thickness);
        } elseif (etch($thickness) < $thickness && etch($thickness) >= $targetedThickness - 1) {
            $etches++;
            $currentOperation = 'etch';
            $thickness = etch($thickness);
        }

        if ($currentOperation != $previousOperation && $previousOperation != '') {
            $thickness = wash($thickness);
        }

        $previousOperation = $currentOperation;
    }

    if ($thickness == $targetedThickness - 1) {
        $xrays++;
    }

    if ($cuts > 0) {
        echo "Cut x${cuts}" . PHP_EOL;
        echo "Transporting and washing" . PHP_EOL;
    }

    if ($laps > 0) {
        echo "Lap x${laps}" . PHP_EOL;
        echo "Transporting and washing" . PHP_EOL;
    }

    if ($grinds > 0) {
        echo "Grind x${grinds}" . PHP_EOL;
        echo "Transporting and washing" . PHP_EOL;
    }

    if ($etches > 0) {
        echo "Etch x${etches}" . PHP_EOL;
        echo "Transporting and washing" . PHP_EOL;
    }

    if ($xrays > 0) {
        echo "X-ray x{$xrays}" . PHP_EOL;
    }

    echo "Finished crystal ${targetedThickness} microns" . PHP_EOL;
}
?>