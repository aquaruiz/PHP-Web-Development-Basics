<?php
$array = explode(" ", readline());
$vals = array_count_values($array);
arsort($vals);
//echo "The number " . array_keys($vals)[0] ." is the most frequent (occurs " . array_values($vals)[0] . " times)"
echo array_keys($vals)[0];
?>