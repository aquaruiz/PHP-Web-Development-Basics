<?php

namespace Controllers;

class ProductsController
{
    /**
     * @var \PDO
     */
    private $db_connection;
    /**
     * @var \Models\Products
     */
    private $model;

    /**
     * Products constructor
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db_connection = $db;
        $this->model = new \Models\Products($this->db_connection);
    }

    public function index()
    {
        $this->renderView(__FUNCTION__);
    }

    public function edit(?int $product_id)
    {
        $data['categories_model'] = new \Models\Categories($this->db_connection);

        $data['product'] = ["product_id" => "", "product_name" => "", "price" => "", "description" => "", "cat_id" => ""];
        if ($_POST) {
            $this->db_connection->beginTransaction();
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $cat_id = $_POST['cat_id'];

            if (!$product_id) {
                $product_id = $this->model->createProduct($product_name, $price, $description, $cat_id);
                $mode = 1;
            } else {
                $this->model->updateProduct($product_id, $product_name, $price, $description, $cat_id);
                $mode = 2;
            }

            $this->db_connection->commit();

            header("Location: view/".$product_id."?mode=".$mode);
            exit();
        } elseif (isset($_GET['product_id'])) {
            $data['product'] = $this->model->getOne($_GET['product_id']);
        }

        $this->renderView(__FUNCTION__, $data);
    }

    public function view(?int $product_id)
    {
        if (!$product_id) {
            throw new \Exception('No product id');
        }

        $data['product'] =  $this->model->getOne($product_id);

        if (!$data['product']) {
            throw new \Exception('No product found!');
        }

        $this->renderView(__FUNCTION__, $data);
    }

    private function renderView(string $view_name, array $data = []){

        include ("Views/header.php");
        include ("Views/".$view_name.".php");
        include ("Views/footer.php");
    }
}
