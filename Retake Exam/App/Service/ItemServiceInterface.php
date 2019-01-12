<?php

namespace App\Service;

use App\Data\ItemDTO;

interface ItemServiceInterface
{
    /** @return \Generator|ItemDTO[] */
    public function getAll() : \Generator;

    /** @return \Generator|ItemDTO[] */
    public function getMyItems() : \Generator;

    public function getOne(int $id) : ItemDTO;

    public function add(ItemDTO $itemDTO) : bool;

    public function edit(ItemDTO $itemDTO, int $id) : bool;

    public function remove(int $id) : bool;
}