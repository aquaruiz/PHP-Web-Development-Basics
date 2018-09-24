<?php
$input = readline();
$length = strlen($input);
if($length == 20){
    echo $input;
} else if($length < 20){
    $stars = 20 - $length;
    echo $input . str_repeat("*", $stars);
} else if ($length > 20){
    echo substr($input, 0, 20);
}
?>