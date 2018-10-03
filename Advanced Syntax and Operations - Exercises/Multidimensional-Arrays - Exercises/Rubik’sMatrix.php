<?php
list($rows, $cols) = explode(" ", readline());
$numCommands = intval(readline());

$cube = [];
$counter = 0;
for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < $cols; $j++){
        $cube[$i][$j] = ++$counter;
    }
}

//print_r($cube);
for($k = 0; $k < $numCommands; $k++){
    list($colOrRow, $direction, $moves) = explode(" ", readline());

    if($direction == "up"){
        for($j = 0; $j < intval($moves); $j++){
            $oldItem = $cube[0][$colOrRow];

            for($i = 0; $i < $rows - 1; $i++){
                $cube[$i][$colOrRow] = $cube[$i + 1][$colOrRow];
            }

            $cube[$rows - 1][$colOrRow] = $oldItem;
        }
    } else if($direction == "down"){
        for($j = 0; $j < intval($moves); $j++) {
            $oldItem = $cube[$rows - 1][$colOrRow];

            for ($i = $rows - 1; $i > 0; $i--) {
                $cube[$i][$colOrRow] = $cube[$i - 1][$colOrRow];
            }

            $cube[0][$colOrRow] = $oldItem;
        }
    } else if($direction == "right"){
        for($j = 0; $j < intval($moves); $j++) {
            $oldItem = $cube[$colOrRow][$cols - 1];

            for ($i = $cols - 1; $i > 0; $i--) {
                $cube[$colOrRow][$i] = $cube[$colOrRow][$i - 1];
            }

            $cube[$colOrRow][0] = $oldItem;
        }
    } else if ($direction == "left"){
        for($j = 0; $j < intval($moves); $j++) {
            $oldItem = $cube[$colOrRow][0];

            for ($i = 0; $i < $cols - 1; $i++) {
                $cube[$colOrRow][$i] = $cube[$colOrRow][$i + 1];
            }

            $cube[$colOrRow][$cols - 1] = $oldItem;
        }
    }
}

$counter2 = 1;
while ($counter2 <= $rows * $cols){
    for($i = 0; $i < $rows; $i++){
        for($j = 0; $j < $cols; $j++){
            if($cube[$i][$j] == $counter2){
                echo "No swap required".PHP_EOL;
            } else{
                for($k = 0; $k < $rows; $k++){
                    if(in_array($counter2, $cube[$k])){
                        $found = array_search($counter2, $cube[$k]);
                        $cube[$k][$found] = $cube[$i][$j];
                        $cube[$i][$j] = $counter2;
                        echo "Swap ($i, $j) with ($k, $found)" . PHP_EOL;
                    }
                }
            }

            $counter2++;
        }
    }
}
?>