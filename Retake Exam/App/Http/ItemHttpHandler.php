<?php

namespace App\Http;

use App\Data\CategoryDTO;
use App\Data\EditDTO;
use App\Data\ItemDTO;
use App\Data\UserDTO;
use App\Service\CategoryServiceInterface;
use App\Service\ItemServiceInterface;
use App\Service\UserServiceInterface;

class ItemHttpHandler extends HttpHandlerAbstract
{
    public function list(ItemServiceInterface $itemService,
                         UserServiceInterface $userService,
                         CategoryServiceInterface $categoryService,
                         array $formData = [],
                         array $getData = [])
    {
        $items = $itemService->getAll();
        $this->render("all_items", $items);
    }

    public function view(ItemServiceInterface $itemService,
                         UserServiceInterface $userService,
                         CategoryServiceInterface $categoryService,
                         array $formData = [],
                         array $getData = [])
    {
        if(!$userService->isLogged()){
            $this->redirect('login.php');
            exit;
        }

        $item = $itemService->getOne($getData['id']);
        $this->render('view', $item);
    }


    public function listMyItems(ItemServiceInterface $itemService,
                                UserServiceInterface $userService,
                                CategoryServiceInterface $categoryService,
                                array $formData = [],
                                array $getData = [])
    {
        $myItems = $itemService->getMyItems();
        $this->render("my_items", $myItems);
    }

    public function add(ItemServiceInterface $itemService,
                        UserServiceInterface $userService,
                        CategoryServiceInterface $categoryService,
                        array $formData = [])
    {
        /** @var ItemDTO $item */
        $item = $this->dataBinder->bind($formData, ItemDTO::class);
        $editDTO = new EditDTO();
        $editDTO->setItem($item);
        $editDTO->setCategory($categoryService->getAll());

        if(isset($formData['add'])){
            $this->handleInsertProcess($itemService, $userService, $categoryService, $formData);
        } else {
            $this->render('add_item', $editDTO);
        }
    }

    private function handleInsertProcess(ItemServiceInterface $itemService,
                                         UserServiceInterface $userService,
                                         CategoryServiceInterface $categoryService,
                                         array $formData = [])
    {
        /** @var ItemDTO $item */
        $item = $this->dataBinder->bind($formData, ItemDTO::class);
        /** @var UserDTO $user */
        $user = $userService->currentUser();
        /** @var CategoryDTO $category */
        $category = $categoryService->getOne(intval($formData['category_id']));

        $item->setUser($user);
        $item->setCategory($category);

        $itemService->add($item);
        $this->redirect('allItems.php');
    }

    public function edit(ItemServiceInterface $itemService,
                          UserServiceInterface $userService,
                          CategoryServiceInterface $categoryService,
                          array $formData = [],
                          array $getData = [])
    {
        $item = $itemService->getOne(intval($getData['id']));

        $editDTO = new EditDTO();
        $editDTO->setItem($item);
        $editDTO->setCategory($categoryService->getAll());

//        $editDTO->setCategory($categoryService->getOne(intval($formData['category_id'])));

        if(isset($formData['edit'])){
            $this->handleEditProcess($itemService, $userService, $categoryService, $formData, $getData);
        } else {
            $this->render('edit_item', $editDTO);
        }
    }

    private function handleEditProcess(ItemServiceInterface $itemService, UserServiceInterface $userService, CategoryServiceInterface $categoryService, array $formData, array $getData)
    {
        try{
            /** @var ItemDTO $item */
            $item = $this->dataBinder->bind($formData, ItemDTO::class);
            /** @var UserDTO $user */
            $user = $userService->currentUser();
            /** @var CategoryDTO $category */
            $category = $categoryService->getOne(intval($formData['category_id']));

            $item->setUser($user);
            $item->setCategory($category);
            $item->setItemId($getData['id']);

            $itemService->edit($item, intval($getData['id']));
            $this->redirect('myItems.php');
        } catch (\Exception $ex){
            var_dump($ex);
        }
    }

    public function remove(ItemServiceInterface $itemService, array $getData = [])
    {
        if(!isset($getData['id'])){
            $this->redirect("allItems.php");
        }
        $itemService->remove(intval($getData['id']));
        $this->redirect("allItems.php");
    }
}