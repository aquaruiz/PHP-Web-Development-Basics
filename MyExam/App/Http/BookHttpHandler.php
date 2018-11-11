<?php

namespace App\Http;

use App\Data\EditDTO;
use App\Data\BookDTO;
use App\Service\GenreService;
use App\Service\GenreServiceInterface;
use App\Service\BookService;
use App\Service\BookServiceInterface;
use App\Service\UserService;
use App\Service\UserServiceInterface;

class BookHttpHandler extends UserHttpHandlerAbstract
{

    /**
     * @param BookServiceInterface $bookService
     * @param UserServiceInterface $userService
     * @param GenreServiceInterface $genreService
     * @param array $formData
     * @throws \Exception
     */
    public function add(BookServiceInterface $bookService,
                        UserServiceInterface $userService,
                        GenreServiceInterface $genreService,
                        array $formData = [])
    {

        /** @var EditDTO $taskDTO */
        $task = $this->dataBinder->bind($formData, BookDTO::class);
        $editDTO = new EditDTO();
        $editDTO->setBook($task);
        $editDTO->setGenres($genreService->getAll());

        if(isset($formData['save'])){
            $this->handleInsertProcess($bookService, $userService, $genreService, $formData);
        }else{
            $this->render("books/add", $editDTO);
        }
    }

    public function edit(BookServiceInterface $bookService,
                         UserServiceInterface $userService,
                         GenreServiceInterface $genreService,
                         array $formData = [], array $getData = [])
    {

        $book = $bookService->getOne(intval($getData['id']));

        $editDTO = new EditDTO();
        $editDTO->setBook($book);
        $editDTO->setGenres($genreService->getAll());

        if(isset($formData['save'])){
            $this->handleEditProcess($bookService, $userService, $genreService, $formData, $getData);
        }else{
            $this->render("books/edit", $editDTO);
        }
    }

    public function delete(BookServiceInterface $bookService, array $getData = []){
        if(!isset($getData['id'])){
            $this->redirect("dashboard.php");
        }
        $bookService->delete(intval($getData['id']));
        $this->redirect("dashboard.php");
    }

    /**
     * @param $bookService
     * @param $userService
     * @param $categoryService
     * @param $formData
     * @throws \Exception
     */
    private function handleInsertProcess($bookService, $userService, $categoryService, $formData)
    {

        /** @var BookDTO $book */
        $book = $this->dataBinder->bind($formData, BookDTO::class);
        /** @var UserService $userService */
        $author = $userService->currentUser();
        /** @var GenreService $categoryService */
        /** @var GenreService $categoryService */
        $category = $categoryService->getOne(intval($formData['category_id']));
        $book->setAuthor($author);
        $book->setGenre($category);

        /** @var BookService $bookService */
        $bookService->add($book);
        $this->redirect("dashboard.php");

    }

    private function handleEditProcess($bookService, $userService, $categoryService, $formData, $getData)
    {
        try {
            /** @var BookDTO $book */
            $book = $this->dataBinder->bind($formData, BookDTO::class);
            /** @var UserService $userService */
            $author = $userService->currentUser();
            /** @var GenreService $categoryService */
            /** @var GenreService $categoryService */
            $category = $categoryService->getOne(intval($formData['category_id']));
            $book->setAuthor($author);
            $book->setGenre($category);
            $book->setId($getData['id']);

            /** @var BookService $bookService */
            $bookService->edit($book, intval($getData['id']));
            $this->redirect("dashboard.php");
        }catch (\Exception $ex){

        }
    }
}