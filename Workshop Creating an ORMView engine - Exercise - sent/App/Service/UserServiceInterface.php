<?php

namespace App\Service;


use App\Data\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $userDTO, string $confirmPassword): bool;
    public function login(string $username, string $password): ?UserDTO;
    public function edit(UserDTO $userDTO, string $confirmPassword): bool;
    public function getCurrentUser(): ?UserDTO;

    /**
     * @return \Generator|UserDTO[]
     */
    public function all(): \Generator;
}