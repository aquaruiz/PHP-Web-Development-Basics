<?php
$input = readline();
$words = preg_split("/ /", $input);
foreach ($words as $word){
    $count = strlen($word);
    echo str_repeat($word, $count);
}
?>