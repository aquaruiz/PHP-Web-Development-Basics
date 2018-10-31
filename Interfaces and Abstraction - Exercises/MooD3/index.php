<?php
spl_autoload_register();

$input = readline();
[$username, $type, $points, $level] = explode(" | ", $input);

$character = new $type($username, $level, $points);
echo $character;
?>