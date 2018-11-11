<?php

require_once "common.php";

$bookService = new \App\Service\BookService(new \App\Repository\BookRepository($db, new \Core\DataBinder()));
$userService = new \App\Service\UserService(new \App\Repository\UserRepository($db));
$genreService = new \App\Service\GenreService(new \App\Repository\GenreRepository($db));

$bookHttpHandler = new \App\Http\BookHttpHandler($template, new \Core\DataBinder());

$bookHttpHandler->edit($bookService, $userService, $genreService, $_POST, $_GET);