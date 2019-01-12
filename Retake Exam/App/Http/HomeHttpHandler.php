<?php

namespace App\Http;

use App\Service\ItemServiceInterface;
use App\Service\UserServiceInterface;

class HomeHttpHandler extends HttpHandlerAbstract
{
    public function index(UserServiceInterface $userService)
    {
        $user =  $userService->currentUser();
        if($userService->isLogged()){
            $this->render('profile', $user);
        } else {
            $this->render('index');
        }
    }

    public function dashboard(ItemServiceInterface $itemService){
        if(!isset($_SESSION['id'])){
            $this->redirect("login.php");
        }

        $allitems = $itemService->getAll();

        $this->render("profile", $allitems);

    }
}