<?php
spl_autoload_register();

$name = readline();
$age = intval(readline());
$id = readline();
$birthDate = readline();

$myCitizen = new Citizen($name, $age, $id, $birthDate);
echo $myCitizen;
?>