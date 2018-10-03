<?php
list($rows, $cols) = explode(" ", readline());

$a = 97;

for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < $cols; $j++){
        for($k = 0; $k < 4; $k++){
            if($k == 0 || $k == 2){
                echo chr($a + $i);
            } else if ($k == 1){
                echo chr($a + $i + $j);
            } else if ($k == 3 && $j != $cols - 1){
                echo " ";
            }
        }

        if($j == $cols - 1){
            echo PHP_EOL;
        }
    }
}
?>