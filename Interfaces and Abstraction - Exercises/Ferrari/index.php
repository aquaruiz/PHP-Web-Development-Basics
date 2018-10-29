<?php
spl_autoload_register();

$name = readline();
$myFerarri = new Ferarri($name);
echo $myFerarri;
?>