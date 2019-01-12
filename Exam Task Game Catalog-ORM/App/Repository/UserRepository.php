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
                      (username, password, display_name, born_on)
                    VALUES (?, ?, ?, ?)'
        )->execute(
            [
                $userDTO->getUsername(),
                $userDTO->getPassword(),
                $userDTO->getDisplayName(),
                $userDTO->getBornOn()
            ]
        );

        return true;
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
        return $this->db->query("
            SELECT user_id AS userId, username, password, display_name AS displayName, born_on AS bornOn 
            FROM users
            WHERE username = ?
        ")->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function findOneById(int $id): ?UserDTO
    {
        return $this->db->query("
            SELECT user_id AS userId, username, password, display_name AS displayName, born_on AS bornOn
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
              display_name = ?,
              born_on = ?
            WHERE user_id = ?
        ")->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
            $userDTO->getDisplayName(),
            $userDTO->getBornOn(),
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
            SELECT user_id AS userId, username, password, display_name AS displayName, born_on AS bornOn
            FROM users 
        ")
            ->execute([])
            ->fetch(UserDTO::class);
    }
}