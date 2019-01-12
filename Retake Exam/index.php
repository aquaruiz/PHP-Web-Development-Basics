<?php

require_once "common.php";

$itemService = new \App\Service\ItemService(new \App\Repository\ItemRepository($db, new \Core\DataBinder()));
$userService = new \App\Service\UserService(new \App\Repository\UserRepository($db));
$homeHttpHandler = new \App\Http\HomeHttpHandler($template, new \Core\DataBinder());
$homeHttpHandler->index($userService);