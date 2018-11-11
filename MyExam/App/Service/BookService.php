<?php

namespace App\Service;

use App\Data\BookDTO;
use App\Repository\BookRepositoryInterface;

class BookService implements BookServiceInterface
{
    /**
     * @var BookRepositoryInterface
     */
    private $taskRepository;

    public function __construct(BookRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * @return \Generator|BookDTO[]
     */
    public function getAll(): \Generator
    {
       return $this->taskRepository->findAll();
    }

    /**
     * @param int $id
     * @return BookDTO
     * @throws \Exception
     */
    public function getOne(int $id): BookDTO
    {
       $task = $this->taskRepository->findOne($id);

       if($task === null){
           throw new \Exception("Task not exist!");
       }

       return $task;
    }

    public function add(BookDTO $taskDTO): bool
    {
      return $this->taskRepository->insert($taskDTO);
    }

    /**
     * @param BookDTO $taskDTO
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function edit(BookDTO $taskDTO, int $id): bool
    {
        $task = $this->taskRepository->findOne($id);

        if($task === null){
            throw new \Exception("Task not exist!");
        }

        return $this->taskRepository->update($taskDTO, $id);
    }

    /**
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id): bool
    {
        $task = $this->taskRepository->findOne($id);

        if($task === null){
            throw new \Exception("Task not exist!");
        }

        return $this->taskRepository->remove($id);
    }
}