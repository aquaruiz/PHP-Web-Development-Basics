<?php

namespace Controllers;

use Models\Products;

class BaseController
{
    /**
     * @var \PDO
     */
    protected $db_connection;

    /**
     * @var \Models\Products
     */
    protected $model;

    /**
     * @var string
     */
    protected $controller_name;

    /**
     * Products constructor
     * @param \PDO $db
     */
    public function __construct(\PDO $db, string $controller_name)
    {
        $this->db_connection = $db;
        $this->controller_name = $controller_name;
        $this->model = new Products($this->db_connection);

        if(!$this->checkSession()){
            header("Location: /Session Handling and Authentication - Lab/users/login");
            exit;
        }
    }

    protected function renderView(string $view_name, array $data = [])
    {
        include("Views/header.php");
        include("Views/" . $view_name . ".php");
        include("Views/footer.php");
    }

    public function checkSession(){
        if(!$_SESSION['user_id']){
            return null;
        }

        return $_SESSION['user_id'];
    }
}