<?php
$database = [];

while (($input = readline()) != "login") {
    $arr = explode(" -> ", $input);
    $user = $arr[0];
    $pass = $arr[1];

    if (!array_key_exists($user, $database)) {
        $database[$user] = [];
    }

    $database[$user] = $pass;
}

$fails = 0;
while (($input = readline()) != "end") {
    $arr = explode(" -> ", $input);
    $user = $arr[0];
    $pass = $arr[1];

    if (array_key_exists($user, $database) && $database[$user] == $pass) {
        echo "$user: logged in successfully" . PHP_EOL;
    } else {
        echo "$user: login failed" . PHP_EOL;
        $fails++;
    }
}

echo "unsuccessful login attempts: $fails";
?>