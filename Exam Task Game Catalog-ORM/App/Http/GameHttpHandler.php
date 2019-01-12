<?php

namespace App\Http;

class GameHttpHandler
{

    /**
     * GameHttpHandler constructor.
     * @param \Core\Template $template
     * @param \Core\DataBinder $param
     */
    public function __construct(\Core\Template $template, \Core\DataBinder $param)
    {
    }

    public function list(\App\Service\GameService $bookService, \App\Service\UserService $userService, \App\Service\ControllerService $genreService, array $data2, array $data)
    {
    }
}