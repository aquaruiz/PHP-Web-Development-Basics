<?php
$month = date('m', strtotime(readline()));
$year = date('Y');
$days = date('t');
for ($day = 1; $day <= $days; $day++) {
    $currentDate = date($day . '-' . $month . '-' . $year);
    if (date('w', strtotime($currentDate)) == 0) {
        echo date('j', strtotime($currentDate)) . "rd" . date(' m, Y', strtotime($currentDate)).PHP_EOL;
    }
}

// 100/100