<?php
$timezone = new DateTimeZone('Europe/Sofia');
$begin = new DateTime();
$end = new DateTime('last day of this month', $timezone);

while ($begin <= $end) {
    if ($begin->format('D') == 'Sun') {
        echo $begin->format('jS F, Y') . "<br>";
        $begin->modify('+7 day');
    } else {
        $begin->modify('+1 day');
    }
}
?>