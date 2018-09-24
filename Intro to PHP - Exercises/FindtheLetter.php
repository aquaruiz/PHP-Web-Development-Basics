<?php
$str = readline();
$arr = explode(" ", readline());

$needle = $arr[0];
$occurrence = intval($arr[1]);
$position = -1;

for($i = 0; $i < $occurrence; $i++){
    $position = strpos($str, $needle, ++$position);
}

if($position > 0){
    echo $position;
} else {
    echo "Find the letter yourself!";
}
?>