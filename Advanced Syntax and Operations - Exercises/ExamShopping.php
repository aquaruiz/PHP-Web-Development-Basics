<?php
$shopinventory = [];

while (($input = readline()) != "shopping time") {
    $arr = explode(" ", $input);
    $command = $arr[0];
    $product = $arr[1];
    $quantity = intval($arr[2]);

    if ($command == "stock") {
        if (!array_key_exists($product, $shopinventory)) {
            $shopinventory[$product] = 0;
        }

        $shopinventory[$product] += $quantity;
    }
}

while (($input = readline()) != "exam time") {
    $arr = explode(" ", $input);
    $command = $arr[0];
    $product = $arr[1];
    $quantity = intval($arr[2]);

    if ($command == "buy") {
        if (!array_key_exists($product, $shopinventory)) {
            echo "$product doesn't exist" . PHP_EOL;
        } else if(array_key_exists($product, $shopinventory) && $quantity <= $shopinventory[$product]){
            $shopinventory[$product] -= $quantity;
        } else if(array_key_exists($product, $shopinventory) && $shopinventory[$product] == 0){
            echo "$product out of stock" . PHP_EOL;
        }else if (array_key_exists($product, $shopinventory) && $quantity > $shopinventory[$product]){
            $shopinventory[$product] = 0;
        }
    }
}

foreach ($shopinventory as $product => $quantity){
    if($quantity > 0){
        echo "$product -> $quantity" . PHP_EOL;
    }
}
?>