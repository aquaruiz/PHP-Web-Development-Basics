<?php

namespace App\Service;


use App\Data\BookDTO;

interface BookServiceInterface
{
    /**
     * @return \Generator|BookDTO[]
     *
     */
    public function getAll() : \Generator;

    public function getOne(int $id) : BookDTO;

    public function add(BookDTO $taskDTO) : bool;
    public function edit(BookDTO $taskDTO, int $id) : bool;
    public function delete(int $id) : bool;


}