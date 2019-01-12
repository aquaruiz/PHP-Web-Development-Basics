<?php

namespace App\Service;

use App\Data\ItemDTO;
use App\Repository\ItemRepositoryInterface;

class ItemService implements ItemServiceInterface
{
    /** @var ItemRepositoryInterface
     */
    private $itemRepository;

    /**
     * ItemService constructor.
     * @param ItemRepositoryInterface $itemRepository
     */
    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    /** @return \Generator|ItemDTO[]
     * @throws \Exception
     */
    public function getAll(): \Generator
    {
        return $this->itemRepository->findAll();
    }

    public function getOne(int $id): ItemDTO
    {
        $item = $this->itemRepository->findOne($id);

        if(null == $item){
            throw new \Exception('Item not exists!');
        }

        return $item;
    }

    public function add(ItemDTO $itemDTO): bool
    {
//        if(strlen($itemDTO->getTitle()) < 3 || strlen($itemDTO->getTitle()) > 255){
//            throw new \Exception('Title must be between 3 and 255 characters!');
//        }
//        if(strlen($itemDTO->getPrice()) < 1 || strlen($itemDTO->getPrice()) > 50){
//            throw new \Exception('Price must be between 1 and 50 characters!');
//        }
//        if(strlen($itemDTO->getDescription()) < 10 || strlen($itemDTO->getDescription()) > 10000){
//            throw new \Exception('Description must be between 10 and 10000 characters!');
//        }
//        if(strstr($itemDTO->getImage(), 'http://')){
//            throw new \Exception('Image URL must be URL!');
//        }

        return $this->itemRepository->insert($itemDTO);
    }

    /** @param ItemDTO $itemDTO
     *  @param int $id
     * @return bool
     * @throws \Exception
     */
    public function edit(ItemDTO $itemDTO, int $id): bool
    {
        $item = $this->itemRepository->findOne($id);

        if(null == $item){
            throw new \Exception('Book not exists');
        }

        return $this->itemRepository->update($itemDTO, $id);
    }

    public function remove(int $id): bool
    {
        $item = $this->itemRepository->findOne($id);

        if(null == $item){
            throw new \Exception('Book not exists');
        }

        return $this->itemRepository->remove($id);
    }

    /** @return \Generator|ItemDTO[] */
    public function getMyItems(): \Generator
    {
        $myId = $_SESSION['id'];
        return $this->itemRepository->findAllByUser($myId);
    }
}