<?php
$base = [];

while (($input = readline()) != "filter base") {
    $arr = explode(" -> ", $input);
    $name = $arr[0];
    $sec = $arr[1];
    if (is_numeric($sec)) {
        if (strpos($sec, ".") == false) {
            $base[] = ["name" => $name,
                "age" => intval($sec)
            ];
        } else if (strpos($sec, ".") == true) {
            $base[] = ["name" => $name,
                "salary" => number_format(floatval($sec), 2, ".", "")
            ];
        }
    } else if (is_string($sec)) {
        $base[] = ["name" => $name,
            "position" => $sec
        ];
    }
}

//var_dump($base);
$search = strtolower(readline());

foreach ($base as $key => $value) {
    if (array_key_exists($search, $value)) {
        echo "Name: " . ($value["name"]) . PHP_EOL;
        echo strtoupper(substr($search, 0, 1)) . substr($search, 1, -1) . $search[strlen($search) - 1] . ": {$value[$search]}" . PHP_EOL;
        echo str_repeat("=", 20) . PHP_EOL;
    }
}
?>