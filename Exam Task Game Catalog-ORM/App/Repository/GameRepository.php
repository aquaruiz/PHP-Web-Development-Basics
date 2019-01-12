<?php

namespace App\Repository;

use App\Data\GameDTO;
use Core\DataBinderInterface;
use Database\DatabaseInterface;

class GameRepository implements GameRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * @var DataBinderInterface
     */
    private $dataBinder;

    /**
     * GameRepository constructor.
     * @param DatabaseInterface $db
     * @param DataBinderInterface $dataBinder
     */
    public function __construct(DatabaseInterface $db, DataBinderInterface $dataBinder)
    {
        $this->db = $db;
        $this->dataBinder = $dataBinder;
    }

    /**
     * @return \Generator|GameDTO[]
     */
    public function findAll(): \Generator
    {
        $lazyGamesResult = $this->db->query("
            SELECT 
        ");
    }

    /**
     * @param int $userId
     * @return \Generator|GameDTO[]
     */
    public function findAllByUser(int $userId): \Generator
    {
        // TODO: Implement findAllByUser() method.
    }

    public function findOne(int $id): GameDTO
    {
        // TODO: Implement findOne() method.
    }

    public function insert(GameDTO $gameDTO): bool
    {
        // TODO: Implement insert() method.
    }

    public function update(GameDTO $gameDTO): bool
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id): bool
    {
        // TODO: Implement remove() method.
    }
}