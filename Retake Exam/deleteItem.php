<?php

require_once "common.php";

$itemService = new \App\Service\ItemService(new \App\Repository\ItemRepository($db, new \Core\DataBinder()));

$itemHttpHandler = new \App\Http\ItemHttpHandler($template, new \Core\DataBinder());

$itemHttpHandler->remove($itemService, $_GET);