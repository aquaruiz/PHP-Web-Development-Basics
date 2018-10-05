<?php
list($x1, $y1, $x2, $y2, $x3, $y3) = explode(", ", readline());

$coordinates = [];
$coordinates[1]['x'] = $x1;
$coordinates[1]['y'] = $y1;
$coordinates[2]['x'] = $x2;
$coordinates[2]['y'] = $y2;
$coordinates[3]['x'] = $x3;
$coordinates[3]['y'] = $y3;

//var_export($coordinates);

function findDistance($x1, $y1, $x2, $y2)
{
    return sqrt(pow(abs($x1 - $x2), 2) + pow((abs($y1 - $y2)), 2));
}

$path123 = findDistance($coordinates[1]['x'], $coordinates[1]['y'], $coordinates[2]['x'], $coordinates[2]['y']) + findDistance($coordinates[2]['x'], $coordinates[2]['y'], $coordinates[3]['x'], $coordinates[3]['y']);
$path132 = findDistance($coordinates[1]['x'], $coordinates[1]['y'], $coordinates[3]['x'], $coordinates[3]['y']) + findDistance($coordinates[3]['x'], $coordinates[3]['y'], $coordinates[2]['x'], $coordinates[2]['y']);
$path213 = findDistance($coordinates[2]['x'], $coordinates[2]['y'], $coordinates[1]['x'], $coordinates[1]['y']) + findDistance($coordinates[1]['x'], $coordinates[1]['y'], $coordinates[3]['x'], $coordinates[3]['y']);

$minDistance = min($path123, $path132, $path213);

if($minDistance == $path123){
    echo "1->2->3: " . $minDistance;
    return;
}

if($minDistance == $path132){
    echo "1->3->2: " . $minDistance;
    return;
}

if($minDistance == $path213){
    echo "2->1->3: " . $minDistance;
    return;
}
?>