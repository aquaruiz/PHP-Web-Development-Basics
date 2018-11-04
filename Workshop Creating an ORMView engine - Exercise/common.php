<?php
session_start();
spl_autoload_register();

$template = new \Core\Template();
$dbData = parse_ini_file('Config/db.ini');
$pdo = new PDO($dbData['dsn'], $dbData['user'], $dbData['pass']);
$db = new \Database\PDODatabase($pdo);
$userRepository = new \App\Repository\UserRepository($db);
$userService = new \App\Service\UserService($userRepository);
$httpHandler = new \App\Http\HttpHandler($template, new \Core\DataBinder());