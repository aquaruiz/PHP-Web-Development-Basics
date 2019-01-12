<?php

require_once "common.php";

$gameService = new \App\Service\GameService(new \App\Repository\GameRepository($db, new \Core\DataBinder()));
$userService = new \App\Service\UserService(new \App\Repository\UserRepository($db));
$controllerService = new \App\Service\ControllerService(new \App\Repository\ControllerRepository($db));

$gameHttpHandler = new \App\Http\GameHttpHandler($template, new \Core\DataBinder());

$gameHttpHandler->list($gameService, $userService, $controllerService, $_POST, $_GET);