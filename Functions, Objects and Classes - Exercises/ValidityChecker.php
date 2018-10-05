<?php
$coordinates = readline();
list($x1, $y1, $x2, $y2) = array_map("floatval", explode(", ", $coordinates));

function checkValidity($x1, $y1, $x2, $y2)
{
    if (sqrt(pow(abs($x1 - $x2), 2) + pow((abs($y1 - $y2)), 2)) * 100 % 100 == 0) {
        return "{{$x1}, {$y1}} to {{$x2}, {$y2}} is valid";
    }

    return "{{$x1}, {$y1}} to {{$x2}, {$y2}} is invalid";
}

echo checkValidity($x1, $y1, 0, 0) . PHP_EOL;
echo checkValidity($x2, $y2, 0, 0) . PHP_EOL;
echo checkValidity($x1, $y1, $x2, $y2);

?>