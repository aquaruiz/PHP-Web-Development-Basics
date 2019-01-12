<?php

namespace App\Data;

class EditDTO
{
    /** @var ItemDTO */
    private $item;

    /** @var CategoryDTO[] */
    private $category;

    /**
     * @return ItemDTO
     */
    public function getItem(): ItemDTO
    {
        return $this->item;
    }

    /**
     * @param ItemDTO $item
     */
    public function setItem(ItemDTO $item): void
    {
        $this->item = $item;
    }

    /**
     * @return CategoryDTO[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param CategoryDTO $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }
}