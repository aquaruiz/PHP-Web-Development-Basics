<?php

namespace App\Repository;

use App\Data\CategoryDTO;
use Database\DatabaseInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * CategoryRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    /** @return \Generator|CategoryDTO[] */
    public function findAll(): \Generator
    {
        return $this->db->query("
            SELECT category_id AS categoryId, name
            FROM categories
        ")->execute()
            ->fetch(CategoryDTO::class);
    }

    public function findOne(int $id): CategoryDTO
    {
        return $this->db->query("
            SELECT category_id AS categoryId, name
            FROM categories
            WHERE category_id = ?
        ")->execute([$id])
            ->fetch(CategoryDTO::class)
            ->current();
    }
}