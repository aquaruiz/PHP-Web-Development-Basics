<?php
$coordinates = explode(", ", readline());

$locateIsland = [];
$locateIsland['isTuvalu'] = function ($x, $y){
    if($x >= 1 && $x <= 3
    && $y >= 1 && $y <= 3){
        return true;
    }

    return false;
};

$locateIsland['isTokelau'] = function ($x, $y){
    if($x >= 8 && $x <= 9
        && $y >= 0 && $y <= 1){
        return true;
    }

    return false;
};


$locateIsland['isSamoa'] = function ($x, $y){
    if($x >= 5 && $x <= 7
        && $y >= 3 && $y <= 6){
        return true;
    }

    return false;
};


$locateIsland['isTonga'] = function ($x, $y){
    if($x >= 0 && $x <= 2
        && $y >= 6 && $y <= 8){
        return true;
    }

    return false;
};

$locateIsland['isCook'] = function ($x, $y){
    if($x >= 4 && $x <= 9
        && $y >= 7 && $y <= 8){
        return true;
    }

    return false;
};

for($i = 0; $i < count($coordinates); $i += 2){
    $curx = $coordinates[$i];
    $cury = $coordinates[$i + 1];
    $found = false;
    
    foreach ($locateIsland as $key =>$location){
        if($location($curx, $cury)){
            echo substr($key, 2) . PHP_EOL;
            $found = true;
            break;
        }
    }

    if(!$found){
        echo "On the bottom of the ocean" . PHP_EOL;
    }
}
?>