<?php
if(isset($_GET) && !empty($_GET) && sizeof($_GET) === 4){
    $delimiter = $_GET['delimiter'];
    $namesInput = $_GET['names'];
    $names = explode($delimiter, $namesInput);
    $agesInput = $_GET['ages'];
    $ages = explode($delimiter, $agesInput);
}
?>