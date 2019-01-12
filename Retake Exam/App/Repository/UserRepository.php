<?php

namespace App\Repository;

use App\Data\UserDTO;
use Database\DatabaseInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * UserRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function insert(UserDTO $userDTO): bool
    {
        $this->db->query(
            'INSERT INTO users
                      (username, password, full_name, location, phone)
                    VALUES (?, ?, ?, ?, ?)'
        )->execute(
            [
                $userDTO->getUsername(),
                $userDTO->getPassword(),
                $userDTO->getFullName(),
                $userDTO->getLocation(),
                $userDTO->getPhone()
            ]
        );

        return true;
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
        return $this->db->query("
            SELECT user_id AS userId, username, password, full_name AS fullName, location, phone
            FROM users
            WHERE username = ?
        ")->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function findOneById(int $id): ?UserDTO
    {
        return $this->db->query("
            SELECT user_id AS userId, username, password, full_name AS fullName, location, phone
            FROM users
            WHERE user_id = ?
        ")->execute([$id])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function update(int $id, UserDTO $userDTO): bool
    {
        $this->db->query("
            UPDATE users
            SET 
              username = ?,
              password = ?,
              full_name = ?,
              location = ?,
              phone = >
            WHERE user_id = ?
        ")->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
            $userDTO->getFullName(),
            $userDTO->getLocation(),
            $userDTO->getPhone(),
            $userDTO->getUserId()
        ]);

        return true;
    }

    /**
     * @return \Generator|UserDTO[]
     */
    public function findAll(): \Generator
    {
        return $this->db->query("
            SELECT user_id AS userId, username, password, full_name AS displayName, location, phone
            FROM users 
        ")
            ->execute([])
            ->fetch(UserDTO::class);
    }
}