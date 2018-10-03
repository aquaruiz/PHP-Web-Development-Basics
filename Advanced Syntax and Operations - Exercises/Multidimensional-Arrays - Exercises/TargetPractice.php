<?php
// the dimensions of the stairs
list($rows, $cols) = array_map("intval", explode(" ", readline())); //array_map("intval", explode(" ", readline()));
// string snake
$str = readline();
// shot parameters (impact row, impact column and radius)
list($irow, $icol, $iradius) = array_map("intval", explode(" ", readline()));

$strcounter = 0;
$matrix = [];
for($i = $rows - 1; $i >= 0; $i--){
    for($j = $cols - 1; $j >= 0; $j--){
        if($i % 2 == 0){
            $matrix[$i][$j] = $str[$strcounter];
        } else {
            $matrix[$i][$cols - 1 - $j] = $str[$strcounter];
        }

        $strcounter++;
        if($strcounter > strlen($str) - 1){
            $strcounter = 0;
        }
    }
}

ksort($matrix);

for($i = 0; $i < $rows; $i++){
    ksort($matrix[$i]);
}

//// shooting function :)))))
function isInRange($currentRow, $currentCol, $irow, $icol, $iradius){
    $colsDiff = $currentCol - $icol;
    $rowsDiff = $currentRow - $irow;

    return pow($colsDiff, 2) + pow($rowsDiff, 2 ) <= pow($iradius, 2);
}

for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < $cols; $j++){
        if(isInRange($i, $j, $irow, $icol, $iradius)){
            $matrix[$i][$j] = " ";
        }
    }
}

// collapsing down
function fallToSolidGround($matrix){
    $width = count($matrix[0]);
    for($row = count($matrix) - 1; $row >= 0; $row--){
        for($column = 0; $column < $width; $column++){
            if($matrix[$row][$column] != " "){
                continue;
            }

            $currentRow = $row - 1;
            while ($currentRow >= 0){
                if($matrix[$currentRow][$column] != " "){
                    $matrix[$row][$column] = $matrix[$currentRow][$column];
                    $matrix[$currentRow][$column] = " ";
                    break;
                }

                $currentRow--;
            }
        }
    }

    return $matrix;
}

$matrix = fallToSolidGround($matrix);


for($i = 0; $i < $rows; $i++){
    for($j = 0; $j < $cols; $j++){
        echo $matrix[$i][$j]. " ";
    }
    echo PHP_EOL;
}

//print_r($matrix);
?>