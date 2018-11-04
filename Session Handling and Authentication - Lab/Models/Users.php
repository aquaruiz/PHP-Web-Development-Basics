<?php

namespace Models;

use PDO;

class Users
{
    /**
     * @var \PDO
     */
    private $db_connection;

    /**
     * Users constructor.
     * @param $db_connection
     */
    public function __construct($db_connection)
    {
        $this->db_connection = $db_connection;
    }

    public function save()
    {
        $username = $_POST['user_name'] ?? null;
        $password = $_POST['password'] ?? null;
        $names = $_POST['names'] ?? null;

        $password = password_hash($password, PASSWORD_DEFAULT);
        $stm = $this->db_connection->prepare(
            "INSERT INTO users (user_name, password, `names`) VALUES (:user_name, :password, :names)"
        );
        $stm->bindParam('user_name', $username);
        $stm->bindParam('password', $password);
        $stm->bindParam('names', $names);

        try {
            $stm->execute();
        } catch (\PDOException $e){
            throw new \Exception('User already exists!');
        }

        return $this->db_connection->lastInsertId();
    }

    public function checkUser($data) : ?int
    {
        $username = $data['user_name'] ?? null;
        $password = $data['password'] ?? null;

        $stm = $this->db_connection->prepare(
            "SELECT user_id, password FROM users WHERE user_name = :user_name"
        );

        $stm->bindParam("user_name", $username);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        if($result){
            if(password_verify($password, $result['password'])){
                return $result['user_id'];
            }
        }

        return null;
    }
}