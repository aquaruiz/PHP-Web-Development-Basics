<?php
function getLimit(string $area): int{
    switch ($area){
        case "motorway":
            return 130;
        case "interstate":
            return 90;
        case "city":
            return 50;
        case "residential":
            return 20;
    }
}
function calcSpeeding(int $speed, string $area):string {
    $limit = getLimit($area);

    if($speed - $limit <= 20 && $speed - $limit > 0){
        return "speeding";
    } elseif ($speed - $limit <= 40 && $speed - $limit > 0){
        return "excessive speeding";
    } else if($speed - $limit > 40 && $speed - $limit > 0){
        return "reckless driving";
    }

    return "";
}

$speed = intval(readline());
$area = readline();
echo calcSpeeding($speed, $area);
?>