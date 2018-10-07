<?php
require "DecimalNumber.php";

$input = readline();
$number = new DecimalNumber($input);
echo $number->reverseIt();
?>