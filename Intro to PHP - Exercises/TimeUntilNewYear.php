<?php
date_default_timezone_set("UTC");
$now = strtotime(readline());

$year = date('Y', $now);
$newYear = strtotime("31-12-{$year} 23:59:59");
$diff = $newYear - $now;

echo 'Hours until new year : ' . number_format(floor($diff / 60 / 60), 0, '.', '') . "\n";
echo 'Minutes until new year : ' . number_format(floor($diff / 60), 0, '.', '') . "\n";
echo 'Seconds until new year : ' . number_format($diff + 1, 0, '.', '') . "\n";

$days = floor($diff / 60 / 60 / 24);
$hours = floor($diff / 60 / 60) % $days;
$minutes = floor($diff / 60) % 60;
$seconds = $diff % 60 + 1;

echo "Days:Hours:Minutes:Seconds {$days}:{$hours}:{$minutes}:{$seconds}";
?>