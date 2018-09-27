<?php
$scoreboard = [];
$escapechrs = str_split("@%&$*");

while (($input = readline()) != "Result") {
    $arr = explode("|", $input);
    $points = array_pop($arr);
    $team = "";
    $player = "";

    for ($i = 0; $i < count($arr); $i++) {
        foreach ($escapechrs as $chr) {
            $arr[$i] = str_replace($chr, "", $arr[$i]);
        }
    }

    $team = ctype_upper($arr[0]) ? $arr[0] : $arr[1];
    $player = !ctype_upper($arr[0]) ? $arr[0] : $arr[1];

    if (!array_key_exists($team, $scoreboard)) {
        $scoreboard[$team] = [];
    }

    if (!array_key_exists($player, $scoreboard[$team])) {
        $scoreboard[$team][$player] = 0;
    }

    $scoreboard[$team][$player] = intval($points);
}

foreach ($scoreboard as $team => $players) {
    sort($players);
}

foreach ($scoreboard as $team => $players) {
    $sum = 0;
    foreach ($players as $player => $points) {
        $sum += $points;
    }

    $scoreboard[$team]["sum"] = $sum;
}

//var_dump($scoreboard);

// TODO sort it
uasort($scoreboard, function ($a, $b){return ($b["sum"] - $a["sum"]);});

foreach ($scoreboard as $team => $players){
    arsort($players);
    $scoreboard[$team] = $players;
}

//var_dump($scoreboard);
foreach ($scoreboard as $team => $players) {
    echo $team . " => " . $players["sum"] . PHP_EOL;
    echo "Most points scored by " . (array_keys($players)[0] == "sum" ? array_keys($players)[1] : array_keys($players)[0]) . PHP_EOL;
}

?>