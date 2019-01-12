<?php

namespace App\Repository;

use App\Data\CategoryDTO;
use App\Data\ItemDTO;
use App\Data\UserDTO;
use Core\DataBinderInterface;
use Database\DatabaseInterface;

class ItemRepository implements ItemRepositoryInterface
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
     * ItemRepository constructor.
     * @param DatabaseInterface $db
     * @param DataBinderInterface $dataBinder
     */
    public function __construct(DatabaseInterface $db, DataBinderInterface $dataBinder)
    {
        $this->db = $db;
        $this->dataBinder = $dataBinder;
    }

    /**
     * @return \Generator|ItemDTO[]
     */
    public function findAll(): \Generator
    {
        $lazyItemsResult = $this->db->query("
            SELECT 
                items.item_id AS item_id,
                items.title,
                categories.category_id AS category_id,
                categories.name,
                items.price,
                items.description,
                items.image,
                users.user_id AS user_id,
                users.username,
                users.full_name,
                users.location,
                users.phone
            FROM items
            INNER JOIN users AS users ON items.user_id = users.user_id
            INNER JOIN categories AS categories ON items.category_id = categories.category_id
            ORDER BY users.location DESC, items.category_id ASC, items.price ASC
        ")->execute()
            ->fetch();

        foreach ($lazyItemsResult as $row) {
            /** @var ItemDTO $item */
            $item = $this->dataBinder->bind($row, ItemDTO::class);
            /** @var UserDTO $user */
            $user = $this->dataBinder->bind($row, UserDTO::class);
            /** @var CategoryDTO $category */
            $category = $this->dataBinder->bind($row, CategoryDTO::class);

            $item->setItemId($row['item_id']);
            $user->setUserId($row['user_id']);
            $category->setCategoryId($row['category_id']);

            $item->setUser($user);
            $item->setCategory($category);

            yield $item;
        }
    }

    /**
     * @param int $userId
     * @return \Generator|ItemDTO[]
     */
    public function findAllByUser(int $userId): \Generator
    {
        $lazyItemsResult = $this->db->query("
            SELECT 
                items.item_id AS item_id,
                items.title,
                categories.category_id,
                categories.name,
                items.price,
                items.description,
                items.image,
                users.user_id AS user_id,
                users.username,
                users.full_name,
                users.location,
                users.phone
            FROM items
            INNER JOIN users AS users ON items.user_id = users.user_id
            INNER JOIN categories AS categories ON items.category_id = categories.category_id
            WHERE items.user_id = ?
            ORDER BY items.category_id ASC, items.price DESC 
        ")->execute([$userId])
            ->fetch();

        foreach ($lazyItemsResult as $row) {
            /** @var ItemDTO $item */
            $item = $this->dataBinder->bind($row, ItemDTO::class);
            /** @var UserDTO $user */
            $user = $this->dataBinder->bind($row, UserDTO::class);
            /** @var CategoryDTO $category */
            $category = $this->dataBinder->bind($row, CategoryDTO::class);

            $item->setItemId($row['item_id']);
            $user->setUserId($row['user_id']);
            $category->setCategoryId($row['category_id']);

            $item->setUser($user);
            $item->setCategory($category);

            yield $item;
        }
    }

    public function findOne(int $id): ItemDTO
    {
        $row = $this->db->query("
            SELECT 
                items.item_id AS item_id,
                items.title,
                categories.category_id,
                categories.name,
                items.price,
                items.description,
                items.image,
                users.user_id AS user_id,
                users.username,
                users.full_name,
                users.location,
                users.phone
            FROM items
            INNER JOIN users AS users ON items.user_id = users.user_id
            INNER JOIN categories AS categories ON items.category_id = categories.category_id
            WHERE items.item_id = ?
        ")->execute([$id])
            ->fetch()
            ->current();

        /** @var ItemDTO $item */
        $item = $this->dataBinder->bind($row, ItemDTO::class);
        /** @var UserDTO $user */
        $user = $this->dataBinder->bind($row, UserDTO::class);
        /** @var CategoryDTO $category */
        $category = $this->dataBinder->bind($row, CategoryDTO::class);

        $item->setItemId($row['item_id']);
        $user->setUserId($row['user_id']);
        $category->setCategoryId($row['category_id']);

        $item->setUser($user);
        $item->setCategory($category);

        return $item;
    }

    public function insert(ItemDTO $itemDTO): bool
    {
        $this->db->query("
            INSERT INTO items(
                          title,
                          price,
                          description,
                          image,
                          category_id,
                          user_id
            ) VALUES (?, ?, ?, ?, ?, ?)
        ")->execute([
            $itemDTO->getTitle(),
            $itemDTO->getPrice(),
            $itemDTO->getDescription(),
            $itemDTO->getImage(),
            $itemDTO->getCategory()->getCategoryId(),
            $itemDTO->getUser()->getUserId()
        ]);

        return true;
    }

    public function update(ItemDTO $itemDTO, int $id): bool
    {
        $this->db->query("
            UPDATE 
              items
            SET 
              title = ?,
              price = ?,
              description = ?,
              image = ?,
              category_id = ?
            WHERE item_id = ?
        ")->execute([
            $itemDTO->getTitle(),
            $itemDTO->getPrice(),
            $itemDTO->getDescription(),
            $itemDTO->getImage(),
            $itemDTO->getCategory()->getCategoryId(),
            $id
        ]);

        return true;
    }

    public function remove(int $id): bool
    {
        $this->db->query("
            DELETE FROM 
              items
            WHERE item_id = ?
        ")->execute([$id]);

        return true;
    }
}