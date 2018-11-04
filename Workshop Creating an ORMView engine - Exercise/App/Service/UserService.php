<?php

namespace App\Service;


use App\Data\UserDTO;
use App\Repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function register(UserDTO $userDTO, string $confirmPassword): bool
    {
        if ($userDTO->getPassword() != $confirmPassword) {
            return false;
        }

        if ($this->userRepository->findOneByUsername($userDTO->getUsername()) != null) {
            return false;
        }

        $this->encryptPassword($userDTO);

        return $this->userRepository->insert($userDTO);
    }

    public function login(string $username, string $password): ?UserDTO
    {
        $user = $this->userRepository->findOneByUsername($username);

        if ($user == null) {
            return null;
        }

        if (!password_verify($password, $user->getPassword())) {
            return null;
        }

        return $user;
    }

    public function edit(UserDTO $userDTO, string $confirmPassword): bool
    {
        $currentUser = $this->userRepository->findOneById($_SESSION['id']);
        $foundUser = $this->userRepository->findOneByUsername($userDTO->getUsername());

        if ($userDTO->getPassword() != $confirmPassword) {
            return false;
        }

        if ($foundUser != null && $foundUser->getUsername() != $currentUser->getUsername()) {
            return false;
        }

        $this->encryptPassword($userDTO);

        return $this->userRepository->edit($_SESSION['id'], $userDTO);
    }

    public function getCurrentUser(): ?UserDTO
    {
        if (!isset($_SESSION['id'])) {
            return null;
        }

        return $this->userRepository->findOneById($_SESSION['id']);
    }

    private function encryptPassword(UserDTO $userDTO): void
    {
        $passwordHash = password_hash($userDTO->getPassword(), PASSWORD_DEFAULT);
        $userDTO->setPassword($passwordHash);
    }

    /**
     * @return \Generator|UserDTO[]
     */
    public function all(): \Generator
    {
        return $this->userRepository->findAll();
    }
}