<?php

require_once "common.php";

$taskService = new \App\Service\BookService(new \App\Repository\BookRepository($db, new \Core\DataBinder()));
$userService = new \App\Service\UserService(new \App\Repository\UserRepository($db));
$categoryService = new \App\Service\GenreService(new \App\Repository\GenreRepository($db));

$taskHttpHandler = new \App\Http\BookHttpHandler($template, new \Core\DataBinder());

$taskHttpHandler->edit($taskService, $userService, $categoryService, $_POST, $_GET);