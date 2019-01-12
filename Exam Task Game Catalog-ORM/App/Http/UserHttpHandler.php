<?php

namespace App\Http;

use App\Data\ErrorDTO;
use App\Data\UserDTO;
use App\Service\UserServiceInterface;

class UserHttpHandler extends HttpHandlerAbstract
{
//    public function allUsers(UserServiceInterface $userService)
//    {
//        $this->render('all', $userService->all());
//    }

    public function login(UserServiceInterface $userService, array $formData = [])
    {
        if(isset($formData['login'])){
            $this->handleLoginProcess($userService, $formData);
        } else {
            $this->render('login');
        }
    }

    private function handleLoginProcess(UserServiceInterface $userService, array $formData)
    {
        try
        {
            $currentUser = $userService->login($formData['username'], $formData['password']);
            $_SESSION['id'] = $currentUser->getUserId();
            $this->redirect('games.php');
        } catch (\Exception $ex)
        {
            $user = $this->dataBinder->bind($formData, UserDTO::class);
            $this->render('login', $user, [$ex->getMessage()]);
        }
    }

    /**
     * @param UserServiceInterface $userService
     * @param array $formData
     */
    public function register(UserServiceInterface $userService, array $formData = [])
    {
        if(isset($formData['register'])){
            $this->handleRegisterProcess($userService, $formData);
        } else {
            $this->render('register');
        }
    }

    private function handleRegisterProcess(UserServiceInterface $userService, array $formData)
    {
        $user = $this->dataBinder->bind($formData, UserDTO::class);


        if ($userService->register($user, $formData['confirm_password'])){
            $this->redirect('login.php');
        } else {
            $this->render('app/error',
                new ErrorDTO('Username is already taken or password mismatch.'));
        }
    }
}