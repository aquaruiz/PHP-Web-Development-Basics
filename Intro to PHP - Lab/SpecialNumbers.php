<?php
$number = (int)readline();

for($i = 1; $i <= $number; $i++){
    $sumDigits = array_sum(preg_split("//", $i));
    if($sumDigits === 5 || $sumDigits === 7 || $sumDigits === 11){
        echo "$i -> True".PHP_EOL;
    } else {
        echo "$i -> False".PHP_EOL;
    }
}
?>