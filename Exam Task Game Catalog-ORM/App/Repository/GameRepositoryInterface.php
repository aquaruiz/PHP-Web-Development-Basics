<?php

namespace App\Repository;

use App\Data\GameDTO;

interface GameRepositoryInterface
{
    /**
     * @return \Generator|GameDTO[]
     */
    public function findAll() : \Generator;

    /**
     * @param int $userId
     * @return \Generator|GameDTO[]
     */
    public function findAllByUser(int $userId) : \Generator;

    public function findOne(int $id) : GameDTO;

    public function insert(GameDTO $gameDTO) : bool;

    public function update(GameDTO $gameDTO) : bool;

    public function remove(int $id) : bool;
}