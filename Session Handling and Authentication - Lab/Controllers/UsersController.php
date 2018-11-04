<?php

namespace Controllers;

use Models\Users;

class UsersController extends  BaseController
{
    public function __construct(\PDO $db, string $controller_name)
    {
        parent::__construct($db, $controller_name);
        $this->model = new Users($this->db_connection);
    }

    public function register(){
        if($_POST){
            $this->model->save($_POST);
            header("Location: /Session Handling and Authentication - Lab/");
            exit;
        } else {
            $this->renderView(__FUNCTION__);
        }
    }

    public function login(){
        if ($_POST){
            $user_id = $this->model->checkUser($_POST);

            if($user_id){
                $_SESSION['user_id'] = $user_id;
                header("Location: /Session Handling and Authentication - Lab/");
                exit;
            }

            header("Location: /Session Handling and Authentication - Lab/users/login/notlogin");
            exit;
        }

        $this->renderView(__FUNCTION__);
    }

    public function checkSession()
    {
//        if(!$_SESSION['user_id']){
//            return null;
//        }

        return true;
    }
}