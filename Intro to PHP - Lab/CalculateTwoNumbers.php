<?php
$num1 = (int)readline();
$num2 = (int)readline();
$command = readline();

switch ($command){
    case 'sum':
        echo $num1 + $num2;
        break;
    case 'subtract':
        echo $num1 - $num2;
        break;
    case 'divide':
        if($num2 === 0 || $num1 === 0){
            echo 'Cannot divide by zero';
            break;
        }
        echo $num1 / $num2;
        break;
    case 'multiply':
        echo $num1 * $num2;
        break;
    default:
        echo 'Wrong operation supplied';
        break;
}
?>