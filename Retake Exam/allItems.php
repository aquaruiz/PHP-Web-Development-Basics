<?php

require_once "common.php";

$itemService = new \App\Service\ItemService(new \App\Repository\ItemRepository($db, new \Core\DataBinder()));
$userService = new \App\Service\UserService(new \App\Repository\UserRepository($db));
$controllerService = new \App\Service\CategoryService(new \App\Repository\CategoryRepository($db));

$itemHttpHandler = new \App\Http\ItemHttpHandler($template, new \Core\DataBinder());

$itemHttpHandler->list($itemService, $userService, $controllerService, $_POST, $_GET);