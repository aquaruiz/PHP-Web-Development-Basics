<?php
spl_autoload_register();

class User
{
    private $username;
    private $password;
    private $names;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    protected function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    protected function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param mixed $names
     */
    protected function setNames($names): void
    {
        $this->names = $names;
    }


}

$pdo = new PDO("mysql:host=localhost:3306;dbname=blog", "root", "");

$db = new \Database\PDODatabase($pdo);
$stm = $db->query("SELECT * FROM users");
$result = $stm->execute();

$allUsers = $result->fetchAll(User::class);

/** @var User $user */
foreach ($allUsers as $user) {
    echo $user->getUsername() . " " . $user->getPassword() . "<br/>";
}
//require_once('config.php');
//require_once('functions.php');
//
//session_start();
//
//$requestParsed = parseRequest();
//processRequest($requestParsed);
