<?php
function sum($a, $b)
{
    return $a + $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    if ($b == 0) {
        return "Caught exception: Division by zero.";
    }

    return $a / $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function factorial($a)
{
    $factorial = 1;

    for ($i = 2; $i <= $a; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

function root($a)
{
    if ($a < 0) {
        return "Caught exception: Can't take the root of a negative number";
    }

    return sqrt($a);
}

function power($a, $b)
{
    return pow($a, $b);
}

function absolute($a)
{
    return abs($a);
}

function pythagorean($a, $b)
{
    return sqrt(pow($a, 2) + pow($b, 2));
}

function triangleArea($a, $b, $c)
{
    $s = ($a + $b + $c) / 2;
    return sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
}

function quadratic($a, $b, $c)
{
    if ($a == 0) {
        return "Caught exception: Division by zero.";
    }

    $x1 = 0;
    $x2 = 0;
    try {
//        global $x1;
        $x1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
        try {
            $x2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
            return $x1 + $x2;
        } catch (exception $exception) {
            return 0;
        }
    } catch (exception $e) {
        return 0;
    }
}

//echo quadratic(1, 10, 20);
$results = [];
while (($input = readline()) != "finally") {
    switch ($input) {
        case "sum":
            $results[] = sum(readline(), readline());
            break;
        case "multiply":
            $results[] = multiply(readline(), readline());
            break;
        case "divide":
            $results[] = divide(readline(), readline());
            break;
        case "subtract":
            $results[] = subtract(readline(), readline());
            break;
        case "factorial":
            $results[] = factorial(readline());
            break;
        case "root":
            $results[] = root(readline());
            break;
        case "power":
            $results[] = power(readline(), readline());
            break;
        case "absolute":
            $results[] = absolute(readline());
            break;
        case "pythagorean":
            $results[] = pythagorean(readline(), readline());
            break;
        case "triangleArea":
            $results[] = triangleArea(readline(), readline(), readline());
            break;
        case "quadratic":
            $results[] = quadratic(readline(), readline(), readline());
            break;
    }
}

//$results[0] = 4;
//$results[1] = 2;
//$lastCommand = "multiply";

$lastCommand = readline();

$cleanedResults = [];

foreach ($results as $result){
    if(is_numeric($result)){
        $cleanedResults[] = $result;
    } else {
        echo $result . PHP_EOL;
    }
}

$results = $cleanedResults;

function executeLastCommand($lastCommand, $results)
{
    $initialResults = $results;
    switch ($lastCommand) {
        case "sum":
            if (count($results) < 2) {
                return $initialResults;
            }

            while (count($results) > 1) {
//                for ($i = 0; $i < 2; $i++) {
                array_push($results, sum($results[0], $results[1]));
                array_shift($results);
                array_shift($results);
//                }
            }

            break;
        case "multiply":
            if (count($results) < 2) {
                return $initialResults;
            }

            while (count($results) > 1) {
//                for ($i = 0; $i < 2; $i++) {
                array_push($results, multiply($results[0], $results[1]));
                array_shift($results);
                array_shift($results);
//                }
            }

            break;
        case "divide":
            if (count($results) < 2) {
                return $initialResults;
            }

            while (count($results) > 1) {
//                for ($i = 0; $i < 2; $i++) {
                $calc = divide($results[0], $results[1]);

                if (is_numeric($calc)) {
                    array_push($results, $calc);
                    array_shift($results);
                    array_shift($results);
                } else {
//                    executeLastCommand(readline(), $initialResults);
                    return "error";
                }
//                }
            }

            break;
        case "subtract":
            if (count($results) < 2) {
                return $initialResults;
            }

            while (count($results) > 1) {
//                for ($i = 0; $i < 2; $i++) {
                array_push($results, substr($results[0], $results[1]));
                array_shift($results);
                array_shift($results);
//                }
            }

            break;
        case "factorial":
            foreach ($results as $number) {
                array_push($results, factorial($number));
                array_shift($results);
            }

            break;
        case
        "root":
            foreach ($results as $number) {
                $calc = root($number);
                if (is_numeric($calc)) {
                    array_push($results, $calc);
                    array_shift($results);
                    array_shift($results);
                } else {
//                    executeLastCommand(readline(), $initialResults);
                    return "error";
                }
            }

            break;
        case "power":
            if (count($results) < 2) {
                return $initialResults;
            }

            while (count($results) > 1) {
//                for ($i = 0; $i < 2; $i++) {
                array_push($results, power($results[0], $results[1]));
                array_shift($results);
                array_shift($results);
//                }
            }

            break;
        case "absolute":
            foreach ($results as $number) {
                array_push($results, absolute($number));
                array_shift($results);
            }

            break;
        case "pythagorean":
            if (count($results) < 2) {
                return $initialResults;
            }

            while (count($results) > 1) {
//                for ($i = 0; $i < 2; $i++) {
                array_push($results, pythagorean($results[0], $results[1]));
                array_shift($results);
                array_shift($results);
//                }
            }

            break;
        case "triangleArea":
            if (count($results) < 3) {
                return $initialResults;
            }

            while (count($results) > 2) {
//                for ($i = 0; $i < 2; $i++) {
                $calc = triangleArea($results[0], $results[1], $results[2]);

                if (is_numeric($calc)) {
                    array_push($results, $calc);
                    array_shift($results);
                    array_shift($results);
                    array_shift($results);
                } else {
//                    executeLastCommand(readline(), $initialResults);
                    return "error";
                }
//                }
            }

            break;
        case "quadratic":
            if (count($results) < 3) {
                return $initialResults;
            }

            while (count($results) > 1) {
//                for ($i = 0; $i < 2; $i++) {
                $calc = quadratic($results[0], $results[1], $results[2]);

                if (is_numeric($calc)) {
                    array_push($results, $calc);
                    array_shift($results);
                    array_shift($results);
                    array_shift($results);
                } else {
//                    executeLastCommand(readline(), $initialResults);
                    return "error";
                }
//            }

                break;
            }
    }

    return $results;
}

$newresults = executeLastCommand($lastCommand, $results);

if($newresults == "error"){
    $newresults = executeLastCommand(readline(), $results);
}

echo implode(", ", $newresults);
?>