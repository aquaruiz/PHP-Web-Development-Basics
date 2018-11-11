<?php

namespace App\Http;


use App\Data\ErrorDTO;
use App\Data\UserDTO;
use App\Service\UserService;
use App\Service\UserServiceInterface;

class HttpHandler extends HttpHandlerAbstract
{
    public function index()
    {
        $this->render('home/index');
    }

    public function register(UserServiceInterface $userService, array $formData = [])
    {
        if (isset($formData['register'])) {
            $this->handleRegisterProcess($userService, $formData);
        } else {
            $this->render('users/register');
        }
    }

    public function login(UserServiceInterface $userService, array $formData = [])
    {
        if (isset($formData['login'])) {
            $this->handleLoginProcess($userService, $formData);
        } else {
            $this->render('users/login');
        }
    }

    public function edit(UserServiceInterface $userService, array $formData = [])
    {
        $currentUser = $userService->getCurrentUser();

        if ($currentUser == null) {
            $this->redirect("login.php");
        }

        if (isset($formData['edit'])) {
            $this->handleEditProcess($userService, $formData);
        } else {
            $this->render('users/profile', $currentUser);
        }
    }

    public function allUsers(UserServiceInterface $userService)
    {
        $this->render('users/all', $userService->all());
    }

    private function handleRegisterProcess(UserServiceInterface $userService, array $formData): void
    {
        $user = $this->getUser($formData);

        if ($userService->register($user, $formData['confirm_password'])) {
            $this->redirect('login.php');
        } else {
            $this->render('app/error',
                new ErrorDTO('Username already taken or password mismatch.'));
        }
    }

    private function handleLoginProcess(UserServiceInterface $userService, array $formData): void
    {
        $user = $userService->login($formData['username'], $formData['password']);

        if ($user != null) {
            $_SESSION['id'] = $user->getId();
            $this->redirect('profile.php');
        } else {
            $this->render('app/error',
                new ErrorDTO('Username does not exist or password mismatch.'));
        }
    }

    private function handleEditProcess(UserServiceInterface $userService, array $formData)
    {
        $user = $this->getUser($formData);

        if ($userService->edit($user, $formData['confirm_password'])) {
            $this->redirect('profile.php');
        } else {
            $this->render('app/error', new ErrorDTO('Wrong username or password mismatch.'));
        }
    }


    private function getUser(array $formData): UserDTO
    {
        $user = $this->dataBinder->bind($formData, UserDTO::class);
        return $user;
    }
}