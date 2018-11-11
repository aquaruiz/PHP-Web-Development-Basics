<?php

require_once "common.php";

$taskService = new \App\Service\BookService(new \App\Repository\BookRepository($db, new \Core\DataBinder()));

$taskHttpHandler = new \App\Http\BookHttpHandler($template, new \Core\DataBinder());
$taskHttpHandler->delete($taskService, $_GET);