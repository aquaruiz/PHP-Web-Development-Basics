<?php

namespace App\Http;

use App\Service\UserServiceInterface;

class HomeHttpHandler extends HttpHandlerAbstract
{
    public function index(UserServiceInterface $userService)
    {
        if($userService->isLogged()){
            $this->render('games');
        } else {
            $this->render('index');
        }
    }

    public function dashboard(){

    }
}