<?php

namespace App\Service;


use App\Data\GenreDTO;
use App\Repository\GenreRepositoryInterface;

class GenreService implements GenreServiceInterface
{

    /**
     * @var GenreRepositoryInterface
     *
     */
    private $categoryRepository;

    public function __construct(GenreRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return \Generator|GenreDTO[]
     */
    public function getAll(): \Generator
    {
       return $this->categoryRepository->findAll();
    }

    /**
     * @param int $id
     * @return GenreDTO
     * @throws \Exception
     */
    public function getOne(int $id): GenreDTO
    {
        $category = $this->categoryRepository->findOne($id);

        if($category === null){
            throw new \Exception("Category not found!");
        }

        return $this->categoryRepository->findOne($id);
    }
}