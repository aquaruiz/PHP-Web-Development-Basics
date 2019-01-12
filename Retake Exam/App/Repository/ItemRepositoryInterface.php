<?php

namespace App\Repository;

use App\Data\ItemDTO;

interface ItemRepositoryInterface
{
    /**
     * @return \Generator|ItemDTO[]
     */
    public function findAll() : \Generator;

    /**
     * @param int $userId
     * @return \Generator|ItemDTO[]
     */
    public function findAllByUser(int $userId) : \Generator;

    public function findOne(int $id) : ItemDTO;

    public function insert(ItemDTO $itemDTO) : bool;

    public function update(ItemDTO $itemDTO, int $id) : bool;

    public function remove(int $id) : bool;
}