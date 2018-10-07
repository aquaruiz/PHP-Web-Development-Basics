<?php

require_once "DateModifier.php";

$input1 = readline();
$date1 = new DateModifier($input1);

$input2 = readline();
$date2 = new DateModifier($input2);

echo $date1->calcDiff($date2);