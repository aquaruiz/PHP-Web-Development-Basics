<?php
date_default_timezone_set("Europe/Sofia");

$year = date('y', time());
$year++;
$nextNewYear = strtotime("01-01-20{$year} 00:00:00");
$now = time();

$remainder = $nextNewYear - $now;
// remaining
$days = floor($remainder /60 / 60 /24);
$hours = floor($remainder / 60 /60) % $days;
$minutes = floor($remainder / 60) % 60;
$seconds = $remainder % 60;
$hours = substr(("0" . $hours), -2, 2);
$minutes = substr(("0" . $minutes), -2, 2);
$seconds = substr(("0".$seconds), -2, 2);
echo "WARNING!".PHP_EOL;
echo "{$days} Days {$hours} Hours {$minutes} Minutes {$seconds} Seconds left to New Year 20$year";
?>