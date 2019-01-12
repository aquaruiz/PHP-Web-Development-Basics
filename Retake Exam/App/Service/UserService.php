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
        if(null !== $this->userRepository->findOneByUsername($userDTO->getUsername())){
//            return false;
            throw new \Exception('Username already taken!!');

        }

        if($userDTO->getPassword() !== $confirmPassword){
//                return false;
            throw new \Exception('Passwords mismatch!');
        }

        if(strlen($userDTO->getUsername()) < 4 || strlen($userDTO->getUsername()) > 255){
            throw new \Exception('Username must be between 4 and 255 characters!');
        }

        if(strlen($userDTO->getPassword()) < 4 || strlen($userDTO->getPassword()) > 255){
            throw new \Exception('Password must be between 4 and 255 characters!');
        }

        if(strlen($userDTO->getFullName()) < 4 || strlen($userDTO->getFullName()) > 255){
            throw new \Exception('Full name must be between 5 and 255 characters!');
        }

        if(strlen($userDTO->getLocation()) < 4 || strlen($userDTO->getLocation()) > 255){
            throw new \Exception('Location must be between 4 and 255 characters!');
        }

        if(strlen($userDTO->getPhone()) < 6 || strlen($userDTO->getPhone()) > 255){
            throw new \Exception('Phone must be between 4 and 255 characters!');
        }

        $this->encryptPassword($userDTO);

        return $this->userRepository->insert($userDTO);
    }

    public function login(string $username, string $password): ?UserDTO
    {
        $user = $this->userRepository->findOneByUsername($username);

        if(null == $user){
            throw new \Exception('Your username does not exist! You might want to <a href="register.php">register<a> first?');
        }

        $userPasswordHash = $user->getPassword();

        if(false === password_verify($password, $userPasswordHash)){
            throw new \Exception('Invalid password!');
        }

        return $user;
    }

    public function currentUser(): ?UserDTO
    {
        if(!isset($_SESSION['id'])){
            return null;
        }

        return $this->userRepository->findOneById($_SESSION['id']);
    }

    public function update(UserDTO $userDTO): bool
    {
        $user = $this->userRepository->findOneByUsername($userDTO->getUsername());

        if(null == $user){ // (null !== $user) ????
            return false;
        }

        $this->encryptPassword($userDTO);
        return $this->userRepository->update($_SESSION['id'], $userDTO);
    }

    /**
     * @param UserDTO $userDTO
     */
    private function encryptPassword(UserDTO $userDTO) : void
    {
        $plainPassword = $userDTO->getPassword();
        $passwordHash = password_hash($plainPassword, PASSWORD_DEFAULT);
        $userDTO->setPassword($passwordHash);
    }

    /**
     * @return \Generator|UserDTO[]
     */
    public function all(): \Generator
    {
        return $this->userRepository->findAll();
    }

    public function isLogged(): bool
    {
        if(null == $this->currentUser()){
            return false;
        }

        return true;
    }
}