<?php

require_once "common.php";


$itemService = new \App\Service\ItemService(new \App\Repository\ItemRepository($db, new \Core\DataBinder()));
$userService = new \App\Service\UserService(new \App\Repository\UserRepository($db));
$categoryService = new \App\Service\CategoryService(new \App\Repository\CategoryRepository($db));

$itemHttpHandler = new \App\Http\ItemHttpHandler($template, new \Core\DataBinder());

$itemHttpHandler->listMyItems($itemService, $userService, $categoryService, $_POST, $_GET);