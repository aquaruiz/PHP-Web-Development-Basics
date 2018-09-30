<?php
$months = ["January", "February", "March", "April", "May", "June",  "July", "August", "September", "October", "November", "December"];
$input = readline();

if(count($months) < $input || $input < 1){
    echo "Invalid Month!";
    return;
}

echo $months[$input - 1];
?>