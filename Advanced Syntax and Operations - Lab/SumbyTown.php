<?php

$input = readline();
$arr = explode(", ", $input);

$incomes = [];

for($i = 0; $i < count($arr) - 1; $i += 2){
    $town = $arr[$i];
    $income = $arr[$i + 1];

    if(!key_exists($town, $incomes)){
        $incomes[$town] = $income;
    } else {
        $incomes[$town] += $income;
    }
}

foreach ($incomes as $town => $income){
    echo "$town => $income" . PHP_EOL;
}
?>