<?php

namespace App\Repository;

use App\Data\BookDTO;

interface BookRepositoryInterface
{
    /**
     * @return \Generator|BookDTO[]
     */
    public function findAll() : \Generator;
    public function findAllByUser(int $userId) : \Generator;

    public function findOne(int $id) : BookDTO;

    public function insert(BookDTO $bookDTO) : bool;
    public function update(BookDTO $bookDTO, int $id) : bool;
    public function remove(int $id) : bool;
}