<?php
require "Number.php";

$input = intval(readline());
$number = new Number($input);
echo $number->giveLastDigitName();
?>