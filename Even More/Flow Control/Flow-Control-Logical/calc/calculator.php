<?php
if(isset($_GET['calculate']) && !empty($_GET) && sizeof($_GET) === 4){
    $operation = $_GET['operation'];
    $numberOne = $_GET['number_one'];
    $numberTwo = $_GET['number_two'];

    $output = "";
    if(strlen($numberOne) == 0 || strlen($numberTwo) == 0){
        $output = "Enter real numbers!";
        return;
    }

    if($operation == "sum"){
        $output = $numberOne + $numberTwo;
    } else if($operation == "subtract"){
        $output = $numberOne - $numberTwo;
    } else {
        $output = 'Invalid operation supplied!';
    }
} else echo 'Not Submitted yet';
?>
