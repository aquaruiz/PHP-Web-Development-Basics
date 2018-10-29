<?php
spl_autoload_register();

$name = readline("Your name:");
$name2 = readline("Your neighbour name:");

$myFerarri = new Ferarri($name);

echo $myFerarri.PHP_EOL;

$hisFerarri = new Ferarri($name2);

echo $hisFerarri;

?>